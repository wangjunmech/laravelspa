<?php 
namespace App\Customized\Classes;
 

/*
*  email_validation.php
*
*
*/
 
class VerifyEmail{

      

      /**
       * PHP Socket resource to remote MTA
       * @var resource $sock
       */
      var $sock;
     
      /**
       * Current User being validated
       */
      var $user;
      /**
       * Current domain where user is being validated
       */
      var $domain;
      /**
       * List of domains to validate users on
       */
      var $domains;
      /**
       * SMTP Port
       */
      var $port = 25;
      /**
       * Maximum Connection Time to wait for connectionestablishment per MTA
       */
      var $max_conn_time = 30;
      /**
       * Maximum time to read from socket before giving up
       */
      var $max_read_time = 5;
     
      /**
       * username of sender
       */
      var $from_user = 'user';
      /**
       * Host Name of sender
       */
      var $from_domain = 'localhost';
     
      /**
       * Nameservers to use when make DNS query for MX entries
       * @var Array $nameservers
       */
      var $nameservers = array(
          '192.168.0.1'
      );
     
      var $debug = false;
     
      /**
       * Initializes the Class
       * @return SMTP_validateEmail Instance
       * @param $email Array[optional] List of Emails toValidate
       * @param $sender String[optional] Email of validator
       */
      function SMTP_validateEmail($emails = false, $sender =false)
      {
          if ($emails) {
               $this->setEmails($emails);
          }
          if ($sender) {
               $this->setSenderEmail($sender);
          }
      }
     //解析邮箱地址
      function _parseEmail($email)
      {
          $parts = explode('@', $email);
          $domain = array_pop($parts);
          $user= implode('@', $parts);
          return array($user, $domain);
      }
     
      /**
       * 设置受事邮件地址
       * @param $emails Array List of Emails
       */
      function setEmails($emails)
      {
          foreach ($emails as $email) {
              list($user, $domain) = $this->_parseEmail($email);
              if (!isset($this->domains[$domain])) {
                    $this->domains[$domain] = array();
              }
              $this->domains[$domain][] = $user;
          }
      }
     
      /**
       * Set the Email of the sender/validator
       * @param $email String
       */
      function setSenderEmail($email)
      {
          $parts = $this->_parseEmail($email);
          $this->from_user = $parts[0];//邮箱地址
          $this->from_domain = $parts[1];//邮箱域名
      }
     
      /**
      * Validate Email Addresses
      * @param String $emails Emails to validate (recipientemails)
      * @param String $sender Sender's Email
      * @return Array Associative List of Emails and theirvalidation results
      */
      function validate($emails = false, $sender = false)
      {
          
          $results = array();
     
          if ($emails) {
                  //设置受事邮件地址
               $this->setEmails($emails);
          }
          if ($sender) {
          //设置发信人
               $this->setSenderEmail($sender);
          }
     
          // query the MTAs on each Domain

          foreach($this->domains as $domain=>$users) {
     
          $mxs = array();
     
          // current domain being queried

          $this->domain = $domain;
      
          // retrieve SMTP Server via MX query on domain

          list($hosts, $mxweights) = $this->queryMX($domain);
     
          // retrieve MX priorities

          for($n = 0; $n < count($hosts); $n++){
              $mxs[$hosts[$n]] = $mxweights[$n];
          }
          asort($mxs);
     
          // last fallback is the original domain

          $mxs[$this->domain] = 0;
      
          $this->debug(print_r($mxs, 1));
      
          $timeout = $this->max_conn_time;
       
          // try each host

          while(list($host) = each($mxs)) {
              // 用fsockopen链接受事地址STMP服务器
                
              $this->debug("try $host:$this->port\n");
              if ($this->sock = fsockopen($host, $this->port, $errno, $errstr, (float) $timeout)) {
                  stream_set_timeout($this->sock, $this->max_read_time);
                   break;
              }
          }

     
          //did we get a TCP socket

          if ($this->sock) {
              $reply = fread($this->sock, 2082);
              $this->debug("<<<\n$reply");
            
              preg_match('/^([0-9]{3}) /ims', $reply,$matches);
              $code = isset($matches[1]) ? $matches[1] : '';
          
              if($code != '220') {
                  // MTA gave an error...

                  foreach($users as $user) {
                   $results[$user.'@'.$domain] = false;
                   }
                   continue;
              }
              
              // say helo

              $this->send("HELO ".$this->from_domain);
              // tell of sender

              $this->send("MAIL FROM: <".$this->from_user.'@'.$this->from_domain.">");
            
              // ask for each recepient on this domain

              foreach($users as $user) {
            
                   // ask of recepient 请求受事邮件地址
                   $reply = $this->send("RCPT TO: <".$user.'@'.$domain.">");
                
                  // get code and msg from response 获得返回码

                   preg_match('/^([0-9]{3}) /ims', $reply,$matches);
                   $code = isset($matches[1]) ? $matches[1] : '';
              
                   if ($code == '250') {
                   // you received 250 so the email address was accepted 250表示已收信

                        $results[$user.'@'.$domain] =true;
                   }
                   elseif ($code == '451' || $code == '452') {
                        // you received 451 so the email address was greylisted (or some temporary error occured on the MTA) - so assume is ok

                        $results[$user.'@'.$domain] =true;
                   }
                   else {
                        $results[$user.'@'.$domain] =false;
                   }
            
             }
            
              // reset before quit

              $this->send("RSET");
            
              // quit

              $this->send("quit");
              // close socket

              fclose($this->sock);
              }
          }
          return $results;
      }
     
     //向受事服务器发送指令
     function send($msg) {
          fwrite($this->sock, $msg."\r\n");
     
          $reply = fread($this->sock, 2082);
     
          $this->debug("END\n$msg\n");
          $this->debug("START\n$reply");
      
          return $reply;
     }
     
      /**
       * Query DNS server for MX entries  getmxrr()函数取得指定网址 DNS 记录之 MX 字段。
       * @return
       */
     function queryMX($domain) {
          $hosts = array();
          $mxweights = array();
          if (function_exists('getmxrr')) {
          getmxrr($domain, $hosts, $mxweights);
     }
     else {
          // windows, we need Net_DNS

          require_once 'Net/DNS.php';
     
          $resolver = new Net_DNS_Resolver();
          $resolver->debug = $this->debug;
          // nameservers to query

          $resolver->nameservers = $this->nameservers;
          $resp = $resolver->query($domain, 'MX');
              if ($resp) {
                   foreach($resp->answer as $answer) {
                        $hosts[] = $answer->exchange;
                        $mxweights[] = $answer->preference;
                   }
              }
              
          }
          return array($hosts, $mxweights);
      }
     
      /**
       * Simple function to replicate PHP 5 behaviour.http://php.net/microtime
       */
     function microtime_float()
     {
       list($usec, $sec) = explode(" ", microtime());
       return ((float)$usec + (float)$sec);
     }
     
     function debug($str)
     {
          if ($this->debug) {
              echo '<pre>'.htmlentities($str).'</pre>';
          }
     }
}





//


// 什么是 SMTP
// SMTP (Simple Mail Transfer Protocol) : 电子邮件从客户机传输到服务器或从某一个服务器传输到另一个服务器使用的传输协议。 SMTP 是请求/响应协议，命令和响应都是基于 ASCII 文本，并以 CR 和 LF 符结束。响应包括一个表示返回状态的三位数字代码。SMTP 在 TCP 协议 25 端口监听连接请求。

// 什么是 ESMTP
// ESMTP (Extended SMTP)，顾名思义，扩展 SMTP 就是对标准 SMTP 协议进行的扩展。它与 SMTP 服务的区别仅仅是，使用 SMTP 发信不需要验证用户帐户，而用 ESMTP 发信时， 服务器会要求用户提供用户名和密码以便验证身份。验证之后的邮件发送过程与 SMTP 方式没有两样。

// SMTP 命令
// SMTP 命令包括：
// HELO 向服务器标识用户身份。发送者能欺骗，说谎，但一般情况下服务器都能检测到。
// EHLO 向服务器标识用户身份。发送者能欺骗，说谎，但一般情况下服务器都能检测到。
// MAIL FROM 命令中指定的地址是发件人地址
// RCPT TO 标识单个的邮件接收人；可有多个 RCPT TO；常在 MAIL 命令后面。
// DATA 在单个或多个 RCPT 命令后，表示所有的邮件接收人已标识，并初始化数据传输，以 CRLF.CRLF 结束
// VRFY 用于验证指定的用户/邮箱是否存在；由于安全方面的原因，服务器常禁止此命令
// EXPN 验证给定的邮箱列表是否存在，扩充邮箱列表，也常被禁用
// HELP 查询服务器支持什么命令
// NOOP 无操作，服务器应响应 OK
// RSET 重置会话，当前传输被取消
// QUIT 结束会话

// 连接 Winmail Server 使用 SMTP 命令发送邮件
// 例如：安装 Winmail 的邮件服务器IP是192.168.10.21 （蓝色字体内容由客户端输入，红色字体内容是服务返回的）

// telnet 192.168.10.21 25 --------------------- 使用 telnet 命令连接服务器 25 端口
// Trying 192.168.10.21... ---------------------- 正在连接服务器 25 端口
// Connected to 192.168.10.21. -------------- 连接服务器 25 端口成功
// 220 Winmail Mail Server ESMTP ready - 显示服务器的标识名称 (Winmail 管理工具->高级设置->系统参数->基本参数中可更改)
// helo domain.com ----------------------- 向服务器标识用户身份，发信不要认证，跳过下面几步直接发送 mail from 命令
// 250 Winmail Mail Server
// ehlo domain.com ----------------------- ESMTP 命令,发信需要认证。
// 250-Winmail Mail Server
// 250-PIPELINING
// 250-AUTH=LOGIN PLAIN
// 250-AUTH LOGIN PLAIN
// 250-SIZE 20480000
// 250 8BITMIME
// auth login --------------------------- 进行用户身份认证
// 334 VXNlcm5hbWU6 
// Y29zdGFAYW1heGl0Lm5ldA== -- BASE64 加密后的用户名
// 334 UGFzc3dvcmQ6 
// MTk4MjIxNA== --------------------- BASE64 加密后的密码
// 235 auth successfully ------------- 身份认证成功
// (535 auth failure ------------------- 身份认证失败)
// 发到本系统中域名下的账户可跳过身份认证。
// mail from: <test1@domain.com> ------- mail from 地址 test1@domain.com
// 250 ok --------------------------------------- 命令执行成功
// rcpt to: <test2@domain.com> ---------- 递送给地址 test2@domain.com
// 250 ok --------------------------------------- 命令执行成功
// data ------------------------------------------ 数据传输初始化
// 354 go ahead ------------------------------ 开始传输数据
// From: test1@domain.com
// To: test2@domain.com
// Date: Mon, 25 Oct 2004 14:24:27 +0800
// Subject: test mail

// Hi, test2
// This is a test mail, you don't reply it.

// .
// ------------------------------------------------------------ 数据内容,包括BASE64加密后的邮件内容, 以 CRLF.CRLF 结束数据传输
// 250 ok message accepted for delivery ------------ 命令执行成功
// quit ------------------------------------------------------- 结束会话
// 221  Winmail Mail Server
// Connection closed by foreign host .---------------- 断开连接
