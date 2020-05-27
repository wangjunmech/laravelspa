<?php 
namespace App\Customized\Classes;
use PHPHtmlParser\Dom;

//一个可以取得客户端的ip、地理信息、浏览器、本地真实IP的php类库
class GetGustInfo{ 
  ////获得访客浏览器类型
  function GetBrowser(){
   if(!empty($_SERVER['HTTP_USER_AGENT'])){
    $br = $_SERVER['HTTP_USER_AGENT'];
    if (preg_match('/MSIE/i',$br)) {    
               $br = 'MSIE';
             }elseif (preg_match('/Firefox/i',$br)) {
     $br = 'Firefox';
    }elseif (preg_match('/Chrome/i',$br)) {
     $br = 'Chrome';
       }elseif (preg_match('/Safari/i',$br)) {
     $br = 'Safari';
    }elseif (preg_match('/Opera/i',$br)) {
        $br = 'Opera';
    }else {
        $br = 'Other';
    }
    return $br;
   }else{return "获取浏览器信息失败！";} 
  }
   
  ////获得访客浏览器语言
  function GetLang(){
   if(!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
    $lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $lang = substr($lang,0,5);
    if(preg_match("/zh-cn/i",$lang)){
     $lang = "简体中文";
    }elseif(preg_match("/zh/i",$lang)){
     $lang = "繁体中文";
    }else{
        $lang = "English";
    }
    return $lang;
     
   }else{return "获取浏览器语言失败！";}
  }
   
   ////获取访客操作系统
  function GetOs(){  
    $agent = $_SERVER['HTTP_USER_AGENT'];  
    $os = false;
 
    if (preg_match('/win/i', $agent) && strpos($agent, '95'))  
    {  
      $os = 'Windows 95';  
    }  
    else if (preg_match('/win 9x/i', $agent) && strpos($agent, '4.90'))  
    {  
      $os = 'Windows ME';  
    }  
    else if (preg_match('/win/i', $agent) && preg_match('/98/i', $agent))  
    {  
      $os = 'Windows 98';  
    }  
    else if (preg_match('/win/i', $agent) && preg_match('/nt 6.0/i', $agent))  
    {  
      $os = 'Windows Vista';  
    }  
    else if (preg_match('/win/i', $agent) && preg_match('/nt 6.1/i', $agent))  
    {  
      $os = 'Windows 7';  
    }  
      else if (preg_match('/win/i', $agent) && preg_match('/nt 6.2/i', $agent))  
    {  
      $os = 'Windows 8';  
    }else if(preg_match('/win/i', $agent) && preg_match('/nt 10.0/i', $agent))  
    {  
      $os = 'Windows 10';#添加win10判断  
    }else if (preg_match('/win/i', $agent) && preg_match('/nt 5.1/i', $agent))  
    {  
      $os = 'Windows XP';  
    }  
    else if (preg_match('/win/i', $agent) && preg_match('/nt 5/i', $agent))  
    {  
      $os = 'Windows 2000';  
    }  
    else if (preg_match('/win/i', $agent) && preg_match('/nt/i', $agent))  
    {  
      $os = 'Windows NT';  
    }  
    else if (preg_match('/win/i', $agent) && preg_match('/32/i', $agent))  
    {  
      $os = 'Windows 32';  
    }  
    else if (preg_match('/linux/i', $agent))  
    {  
      $os = 'Linux';  
    }  
    else if (preg_match('/unix/i', $agent))  
    {  
      $os = 'Unix';  
    }  
    else if (preg_match('/sun/i', $agent) && preg_match('/os/i', $agent))  
    {  
      $os = 'SunOS';  
    }  
    else if (preg_match('/ibm/i', $agent) && preg_match('/os/i', $agent))  
    {  
      $os = 'IBM OS/2';  
    }  
    else if (preg_match('/Mac/i', $agent) && preg_match('/PC/i', $agent))  
    {  
      $os = 'Macintosh';  
    }  
    else if (preg_match('/PowerPC/i', $agent))  
    {  
      $os = 'PowerPC';  
    }  
    else if (preg_match('/AIX/i', $agent))  
    {  
      $os = 'AIX';  
    }  
    else if (preg_match('/HPUX/i', $agent))  
    {  
      $os = 'HPUX';  
    }  
    else if (preg_match('/NetBSD/i', $agent))  
    {  
      $os = 'NetBSD';  
    }  
    else if (preg_match('/BSD/i', $agent))  
    {  
      $os = 'BSD';  
    }  
    else if (preg_match('/OSF1/i', $agent))  
    {  
      $os = 'OSF1';  
    }  
    else if (preg_match('/IRIX/i', $agent))  
    {  
      $os = 'IRIX';  
    }  
    else if (preg_match('/FreeBSD/i', $agent))  
    {  
      $os = 'FreeBSD';  
    }  
    else if (preg_match('/teleport/i', $agent))  
    {  
      $os = 'teleport';  
    }  
    else if (preg_match('/flashget/i', $agent))  
    {  
      $os = 'flashget';  
    }  
    else if (preg_match('/webzip/i', $agent))  
    {  
      $os = 'webzip';  
    }  
    else if (preg_match('/offline/i', $agent))  
    {  
      $os = 'offline';  
    }  
    else  
    {  
      $os = '未知操作系统';  
    }  
    return $os;    
}

   
  ////获得访客真实ip
  function Getip(){
    // $_SERVER['REMOTE_ADDR']：浏览当前页面的用户计算机的ip地址
    // $_SERVER['HTTP_CLIENT_IP']：客户端的ip
    // $_SERVER['HTTP_X_FORWARDED_FOR']：浏览当前页面的用户计算机的网关
    // $_SERVER['HTTP_X_REAL_IP']：nginx 代理模式下，获取客户端真实IP

    $ip = $_SERVER['REMOTE_ADDR'];
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && preg_match_all('#\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}#s', $_SERVER['HTTP_X_FORWARDED_FOR'], $matches)) {
      foreach ($matches[0] AS $xip) {
        if (!preg_match('#^(10|172\.16|192\.168)\.#', $xip)) {
          $ip = $xip;
          break;
        }
      }
    } elseif (isset($_SERVER['HTTP_CLIENT_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CLIENT_IP'])) {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_CF_CONNECTING_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CF_CONNECTING_IP'])) {
      $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
    } elseif (isset($_SERVER['HTTP_X_REAL_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_X_REAL_IP'])) {
      $ip = $_SERVER['HTTP_X_REAL_IP'];
    }
    return $ip;

    // // **********get ip 方法2
    //     static $realip;
    //     if (isset($_SERVER)){
    //         if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
    //             $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    //         } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
    //             $realip = $_SERVER["HTTP_CLIENT_IP"];
    //         } else {
    //             $realip = $_SERVER["REMOTE_ADDR"];
    //         }
    //     } else {
    //         if (getenv("HTTP_X_FORWARDED_FOR")){
    //             $realip = getenv("HTTP_X_FORWARDED_FOR");
    //         } else if (getenv("HTTP_CLIENT_IP")) {
    //             $realip = getenv("HTTP_CLIENT_IP");
    //         } else {
    //             $realip = getenv("REMOTE_ADDR");
    //         }
    //     }
    //     return $realip;

    // // **********get ip 方法3
    // $ip=FALSE;
    // //客户端IP 或 NONE 
    // if(!empty($_SERVER["HTTP_CLIENT_IP"])){
    //     $ip = $_SERVER["HTTP_CLIENT_IP"];
    // }
    // //多重代理服务器下的客户端真实IP地址（可能伪造）,如果没有使用代理，此字段为空
    // if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    //     $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
    //     if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
    //     for ($i = 0; $i < count($ips); $i++) {
    //         if (!eregi ("^(10│172.16│192.168).", $ips[$i])) {
    //             $ip = $ips[$i];
    //             break;
    //         }
    //     }
    // }
    // //客户端IP 或 (最后一个)代理服务器 IP 
    // return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
  

}
   
  ////获得本地真实IP
  function get_onlineip($format=0) {
    echo '查询IP<br>';
    $dictUrl = "http://mip.chinaz.com/";//查询ip的网址
    // $content = file_get_contents($dictUrl);
    $dom = new Dom();
    $dom->loadFromUrl($dictUrl);
    $str = $dom->find('.contnull');//查询信息节点查找，OK
    $ipNode = $dom->find('.c-red')[1];//只取出ip地址的节点OK,
    $ip = $ipNode->innerHtml;//取得ip地址
    $addNode = $dom->find('.c-red')[2];//只取出地址的节点OK,
    $addr = $addNode->innerHtml;//取得地址
    // var_dump($str);
    $html = $str->outerHtml;
    echo $html;
    echo '<pre>';
        echo $html;
    echo '</pre>';
    echo $addr.']]]]]]]]]]]]]';


    
   }
   
  ////根据ip获得访客所在地地名
  function Getaddress($ip=''){
   if(empty($ip)){
       $ip = $this->Getip();    
   }
   $ipadd = file_get_contents("http://int.dpool.sina.com.cn/iplookup/iplookup.php?ip=".$ip);//根据新浪api接口获取
   if($ipadd){
    $charset = iconv("gbk","utf-8",$ipadd);   
    preg_match_all("/[\x{4e00}-\x{9fa5}]+/u",$charset,$ipadds);
     
    return $ipadds;   //返回一个二维数组
   }else{return "addree is none";}  
  } 
 }


// 使用示例
 // $gifo = new get_gust_info();
 // echo "你的ip:".$gifo->Getip();
 // echo "<br/>所在地：";
 // $ipadds = $gifo->Getaddress();
 // foreach($ipadds[0] as $value){
 //     echo "\r\n    ".iconv("utf-8","gbk",$value);    
 // }
  
 // echo "<br/>浏览器类型：".$gifo->GetBrowser();
 // echo "<br/>浏览器语言：".$gifo->GetLang();
 // echo "<br/>操作系统：".$gifo->GetOs();
