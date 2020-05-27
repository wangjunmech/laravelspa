<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use SMTPValidateEmail\Validator as SmtpEmailValidator;
use App\Customized\Classes\test;
use App\Customized\Classes\GetGustInfo;
use App\Customized\Classes\VerifyEmail;

class MailVerifyController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api');
    }

    /**
     * 参考网站：
     https://www.mail-tester.com
     https://github.com/zytzagoo/smtp-validate-email
     qualicrown.com
     https://www.validator.pizza/#documentation
     https://blog.csdn.net/qq_34804120/article/details/86348601
     在线验证网址参考：
     http://blog.chacuo.net/
     http://tool.chacuo.net/mailverify
     https://tools.verifyemailaddress.io/
     https://www.jsanai.com/verifyemail.html
     https://verify-email.org/
     https://www.validator.pizza
     https://mail.emailcamel.com/admin/index.php

     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
echo '>>>>>>>>>>>>>>>>>>>>>>***********GetGustInfo测试**************<<<<<<<<<<<<<<<<<<<<<<<br>';
$ttt = new test();
$ttt->index();
$gifo = new GetGustInfo();
$ve = new VerifyEmail();
 echo "你的ip:".$gifo->Getip();
 echo "你的get_onlineip:".$gifo->get_onlineip();//待修改类方法
 echo "<br/>您的所在地：";
 // $ipadds = $gifo->Getaddress();//待修改类方法
 // foreach($ipadds[0] as $value){
 //     echo "\r\n    ".iconv("utf-8","gbk",$value);    
 // }
  
 echo "<br/>浏览器类型：".$gifo->GetBrowser();
 echo "<br/>浏览器语言：".$gifo->GetLang();
 echo "<br/>操作系统：".$gifo->GetOs();

echo '>>>>>>>>>>>>>>>>>>>>>>***********原生代码测试**************<<<<<<<<<<<<<<<<<<<<<<<br>';
        // $email = 'bruce.wang@osmap.com.cn';
        $email = 'wangjunmechdevise@163.com';
        // $email = '75855030@qq.com';
        // $email = 'wangjundesign@gmail.com';
        // $email = 'bruce@qualicrown.com';
        // $email = 'bruce@qualicrowntestwrong.com';

        // 检查域名是否存在
        $domainArr = explode("@",$email);

echo '<pre>';
        $addr = explode('@', $email);
        // var_dump($addr);
        $user = $domainArr[0];
        $domain = $domainArr[1];
        echo $user.'==========<br>';
        echo $domain.'==========<br>';

        $valid = checkdnsrr($domain,"a"); // a 查找a记录
        // $valid = checkdnsrr($domain,"any"); // ANY 查找任意类型的记录
        if($valid)
            echo $domain." is exists";
        else
            echo $domain." is not exists!<br>";
echo '<br>';
$opt = array('A','MX','NS','SOA','PTR','CNAME','AAAA','A6', 'SRV','NAPTR','TXT','ANY');
for($k=0;$k<count($opt);$k++){
    echo $opt[$k].'记录<==>'.checkdnsrr($domain,$opt[$k]).'<br>';
}

//         echo '>>>>>>>>>>>>>>>>>>>>>>*************************<<<<<<<<<<<<<<<<<<<<<<<br>';
        getmxrr($domain,$mxhosts,$weights);
        print_r($mxhosts);
        $mailserverNum = count($mxhosts);
        for($i=0;$i<$mailserverNum;$i++){
            $mailHostIp = gethostbyname($mxhosts[$i]);
            echo $mxhosts[$i].'====>主机IP为:'.$mailHostIp.' 权重为：'.$weights[$i].'<br>';
        }



echo '>>>>>>>>>>>>>>>>>>>>>***********使用SMTPValidateEmail\Validator**************<<<<<<<<<<<<<<<<<<<<<<<br>';
// $email     = 'bruce.wang@osmap.com.cn';
// $email = 'wangjunmechdevise99999@163.com';
// $email = 'wangjunmechdevise@163.com';//这个检测不到？？？
$email = 'wangjundesign@126.com';//这个检测不到？？？
// $email = 'testiftheuserisvalid@qq.com';
// $email = 'wangjundesign@gmail.com';
// $email = 'bruce@qualicrown.com';
// $email = 'bruce@qualicrowntestwrong.com';

$sender    = 'wangjundesign@126.com';
$validator = new SmtpEmailValidator($email, $sender);

// If debug mode is turned on, logged data is printed as it happens:
// $validator->debug = true;
$results   = $validator->validate();
echo '<pre>';

var_dump($results);
echo '>>>>>>>>>>>>>>>>>>>>>>*************************<<<<<<<<<<<<<<<<<<<<<<<br>';

// Get log data (log data is always collected)
$log = $validator->getLog();
var_dump($log);

// $fp = fsockopen($hostIp, 25, $errno, $errstr, 30);
// if (!$fp) {
//     echo "$errstr ($errno)<br />\n";
// } else {
//     $out = "GET / HTTP/1.1\r\n";
//     $out .= "Host:".$hostIp."\r\n";
//     $out .= "Connection: Close\r\n\r\n";
//     fwrite($fp, $out);
//     while (!feof($fp)) {
//         echo fgets($fp, 128);
//     }
//     fclose($fp);
// }

echo '>>>>>>>>>>>>>>>>>>>>>>***********原生代码测试**************<<<<<<<<<<<<<<<<<<<<<<<br>';




    }
 
}
