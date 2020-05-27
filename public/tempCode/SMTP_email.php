<?php


/*  
SMTP判断邮箱是否存在,检查email地址是否真实存在

判断一个Email是否存在的类
作者:mlemos
来源:www.fastboard.org
 
*  email_validation.php  
*  
*  
*/  
 
class  email_validation_class  
{  
//var  $email_regular_expression="^([a-z0-9_]  |//-  |//.)+@(([a-z0-9_]  |//-)+//.)+[a-z]{2,4}$";  
           var  $timeout=0;  
           var  $localhost="";  
           var  $localuser="";  
 
           Function  GetLine($connection)  
           {  
                       for($line="";;)  
                       {  
                                   if(feof($connection))  
                                               return(0);  
                                   $line.=fgets($connection,100);  
                                   $length=strlen($line);  
                                   if($length>=2  &&  substr($line,$length-2,2)=="/r/n")  
                                               return(substr($line,0,$length-2));  
                       }  
           }  
 
           Function  PutLine($connection,$line)  
           {  
                       return(fputs($connection,"$line/r/n"));  
           }  
 
           Function  ValidateEmailAddress($email)  
           {  
                       //return(eregi($this->email_regular_expression,$email)!=0);  
                       return(eregi("^([a-z0-9_]  |//-  |//.)+@(([a-z0-9_]  |//-)+//.)+[a-z]{2,4}$",$email)!=0);  
           }  
 
           Function  ValidateEmailHost($email,$hosts=0)  
           {  
                       if(!$this->ValidateEmailAddress($email))  
                                   return(0);  
                       $user=strtok($email,"@");  
                       $domain=strtok("");  
                       if(GetMXRR($domain,&$hosts,&$weights))  
                       {  
                                   $mxhosts=array();  
                                   for($host=0;$host<count($hosts);$host++)  
                                               $mxhosts[$weights[$host]]=$hosts[$host];  
                                   KSort($mxhosts);  
                                   for(Reset($mxhosts),$host=0;$host<count($mxhosts);Next($mxhosts),$host++)  
                                               $hosts[$host]=$mxhosts[Key($mxhosts)];  
                       }  
                       else  
                       {  
                                   $hosts=array();  
                                   if(strcmp(@gethostbyname($domain),$domain)!=0)  
                                   $hosts[]=$domain;  
                       }  
                       return(count($hosts)!=0);  
           }  
 
           Function  VerifyResultLines($connection,$code)  
           {  
                       while(($line=$this->GetLine($connection)))  
                       {  
                                   if(!strcmp(strtok($line,"  "),$code))  
                                               return(1);  
                                   if(strcmp(strtok($line,"-"),$code))  
                                               return(0);  
                       }  
                       return(-1);  
           }  
 
           Function  ValidateEmailBox($email)  
           {  
                       if(!$this->ValidateEmailHost($email,&$hosts))  
                                   return(0);  
                       if(!strcmp($localhost=$this->localhost,"") &&  !strcmp($localhost=getenv("SERVER_NAME"),"")  && !strcmp($localhost=getenv("HOST"),""))  
                                   $localhost="localhost";  
                       if(!strcmp($localuser=$this->localuser,"") &&  !strcmp($localuser=getenv("USERNAME"),"")  && !strcmp($localuser=getenv("USER"),""))  
                                   $localuser="root";  
                       for($host=0;$host<count($hosts);$host++)  
                       {  
                                   if(($connection=($this->timeout ? fsockopen($hosts[$host],25,&$errno,&$error,$this->timeout) :  fsockopen($hosts[$host],25))))  
                                   {  
                                              if($this->VerifyResultLines($connection,"220")>0  && $this->PutLine($connection,"HELO  $localhost")  && $this->VerifyResultLines($connection,"250")>0  && $this->PutLine($connection,"MAIL  FROM: <$localuser@$localhost>")  && $this->VerifyResultLines($connection,"250")>0  && $this->PutLine($connection,"RCPT  TO:  <$email>")  && ($result=$this->VerifyResultLines($connection,"250"))>=0)  
                                               {  
                                                           fclose($connection);  
                                                           return($result);  
                                               }  
                                               fclose($connection);  
                                   }  
                       }  
                       return(-1);  
           }  
};  
 
?>  
=============================================================================  
 
-----------------------------------------------------------------------------  
 
应用范例：  
=============================================================================  
echo  "<center><br/>检查电子邮件地址的正确性:<br/>";  
 
$newmail  =  "test@test.com";  
 
require("email_validation.php3");  
 
$validator=new  email_validation_class;  
$validator->timeout=10;  
 
if(IsSet($newemail)  &&  strcmp($newemail,""))  
{  
           if(($result=$validator->ValidateEmailBox($newemail))<0)  
           {  
                       echo  "不能确定您的信箱是否正确.  您的信箱离这里太远了吧?<br/>";  
                       return;  
           }  
           else  
           {    
                       if(!$result)  
                       {    
                                   echo  "您输入的信箱地址是不正确的!  :)<br/>";  
                                   return;  
                       }  
                       else    
                                   echo  "邮箱合法!<br/>";  
           }  
}  

原理解释：

在以往的编程中，比如编写用户的资料时，有时需要确认用户输入的Email是否真实有效，以前我们最多只能做到验证Email是否包含了某些特殊的字符，比如"@",".",".com"等,做到的只是判断了Email的合法性，证明用户填写的Email格式是正确的，但是这个Email是否真正的存在于网络中，则没有办法。


　首先需要大家了解一下SMTP协议。
1.SMTP是工作在两种情况下：一是电子邮件从客户机传输到服务器；二是从某一个服务器传输到另一个
　　服务器
2.SMTP是个请求/响应协议，命令和响应都是基于ASCII文本，并以CR和LF符结束。响应包括一个表示返　
　　回状态的三位数字代码
3.SMTP在TCP协议25号端口监听连接请求
4.连接和发送过程
SMTP协议说复杂也不复杂（明明带有“简单”这个词嘛），说简单如果你懂得Sock。不过现在只是我们利用的就是第一条中说的，从客户机传输到服务器，当我们向一台服务器发送邮件时，邮件服务器会首先验证邮件发送地址是否真的存在于本服务器上。
操作的步骤如下：
连接服务器的25端口（如果没有邮件服务，连了也是白连）
发送helo问候
发送mail from命令，如果返回250表示正确可以，连接本服务器，否则则表示服务器需要发送人验证。
发送rcpt to命令，如果返回250表示则Email存在
发送quit命令，退出连接
下面我们就来操作这个流程：
首先看看页面构架：
<b>普通的Email验证</b>
<form runat="server">
<table boder="#6699FF">
<tr><td colspan="2" align="center" ><asp:Labelid="lblMsgShow" ForeColor="red" runat="server"/></td></tr>
<tr><td>需要验证的Email地址:</td><td><asp:TextBox id="tbEmail" runat="server" /></td></tr>
<tr><td>邮件SMTP服务器：</td><td><asp:TextBox id="tbServer" runat="server" /></td></tr>
<tr><td>SMTP端口：</td><td><asp:TextBoxid="tbPort" Text="25" runat="server" /></td></tr>
<tr><td colspan="2" ><asp:Button id="btnValidate"Text="验证" OnClick="Validate_Email" runat="server"/></td></tr>
</table>
<b>验证过程展示：</b>
<asp:Panel id="ShowPro" runat="server" />
</form>
Button控件的点击将激发Valiate_Email事件，所有主程序操作全是在这个事件中完成，下面就来具体讲解本事件处理中的代码。
关于TCP连接的东东，我就不想再重复了。。请大家自己去看我以前的文章:
string strEmail,strServer;
int intPort;
strEmail = tbEmail.Text;
strServer = tbServer.Text;
intPort = Int32.Parse(tbPort.Text); file://默认端口是25

TcpClient tcpc = new TcpClient();
服务器等信息来自于用户输入，建立与服务器25端口的连接。

try
{
tcpc.Connect(strServer,intPort);
StreamReader sr = new StreamReader(tcpc.GetStream(),Encoding.Default);
sr.ReadLine();
...
}
请注意上面代码中两点：一在beta2中不能再通过判断返回值的方法来判断建立的连接是否成功，只能通过捕捉错误例外的方法判断；二在打开连接，使用Stream读取时，必须有一个sr.ReadLine，一行是服务器的欢迎信息加版本信息。

接下来就是按照上面所说的步骤来完成操作：

file://写入HELO命令
if(OperaStream(tcpc,"HELOhttp://www.webjx.com") != "250")
{
lblMsgShow.Text = "HELO 命令不能完成，本端口可能并非提供SMTP服务";
OperaStream(tcpc,"QUIT");
return;
}
file://写入Mail From命令
if(OperaStream(tcpc,"MAIL FROM: web@webjx.com") != "250")
{
lblMsgShow.Text = "MAIL命令不能完成，SMTP服务需要验证";
OperaStream(tcpc,"QUIT");
return;
}
file://写入RCPT命令，这是关键的一步，后面的参数便是查询的Email的地址
if(OperaStream(tcpc,"RCPT TO: "+strEmail) != "250")
{
lblMsgShow.Text = strEmail + "此邮件地址并非有效";
OperaStream(tcpc,"QUIT");
return;
}
else
{
lblMsgShow.Text = strEmail + "是一个合法有效的邮件地址";
OperaStream(tcpc,"QUIT");
return;
}
Helo命令后面的主机名，在某些邮件服务器中不需要比如Imail，但是还是写上好，当然你也可以乱写骗服务器，不过一般来说服务器都能检查出来。

其中OperaStrem是我们是自定义的函数，用于操作连接流：

public string OperaStream(TcpClient tcpc,string strCmd)
{
Stream TcpStream;
strCmd = strCmd + "/r/n"; file://加入换行符
TcpStream = tcpc.GetStream();
byte[] bWrite = Encoding.Default.GetBytes(strCmd.ToCharArray());
TcpStream.Write(bWrite,0,bWrite.Length);
StreamReader sr = new StreamReader(tcpc.GetStream(),Encoding.Default);
string rl = sr.ReadLine();
string sp = rl.Substring(0,3);
ShowPro.Controls.Add(new LiteralControl("执行命令：<fontcolor=red>"+strCmd+"</font><br/>返回数据："+rl+"<br/>"));
return sp;
}
此函数的返回值是流的信息代码，用于判断操作是否成功，250表示成功，550表示只能适用于本地邮件，也就是说发件人必须是该服务器上的用户，比如在连接smtp.163.Net,就必须拥有一个真实有效的163.Net帐号，这种做法是服务器防止外人使用服务发送垃圾邮件
————————————————
版权声明：本文为CSDN博主「为什么没有人加」的原创文章，遵循CC 4.0 BY-SA版权协议，转载请附上原文出处链接及本声明。
原文链接：https://blog.csdn.net/hffyyff/article/details/83717240

$smtp = array(
    //1、EHLO，期待返回220或者250
    array("EHLO ".$loc_host.$lb,"220,250","HELO error: "),
    //2、发送Auth Login，期待返回334
    array("AUTH LOGIN".$lb,"334","AUTH error:"),
    //3、发送经过Base64编码的用户名，期待返回334
    array(base64_encode($smtp_acc).$lb,"334","AUTHENTIFICATION error : "),
    //4、发送经过Base64编码的密码，期待返回235
    array(base64_encode($smtp_pass).$lb,"235","AUTHENTIFICATION error : ")
    );
     
    //5、发送Mail From，期待返回250
    $smtp[] = array("MAIL FROM: <".$from.">".$lb,"250","MAIL FROM error: ");
    //6、发送Rcpt To。期待返回250
    $smtp[] = array("RCPT TO: <".$to.">".$lb,"250","RCPT TO error: ");
    //7、发送DATA，期待返回354
    $smtp[] = array("DATA".$lb,"354","DATA error: ");
    //8.0、发送From
    $smtp[] = array("From: ".$from.$lb,"","");
    //8.2、发送To
    $smtp[] = array("To: ".$to.$lb,"","");
    //8.1、发送标题
    $smtp[] = array("Subject: ".$subject.$lb,"","");
$result_str="";
    //发送smtp数组中的命令/数据
    foreach($smtp as $req)
    {
    //发送信息
    @fputs($fp, $req[0]);
    //如果需要接收服务器返回信息，则
    if($req[1])
    {
    //接收信息
    while($result = @fgets($fp, 1024))
    {
    if(substr($result,3,1) == " ")
    {
    break;
    }
    };
    if (!strstr($req[1],substr($result,0,3)))
    {
    $result_str.=$req[2].$result."<br>";
    }
    }
    }
    //关闭连接
    @fclose($fp);
    return $result_str;
    }