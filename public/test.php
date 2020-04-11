<?php

$word = 'parallels';
// $word = 'associating';
// $url = "http://www.iciba.com/index.php?callback=jQuery19006722940878796992_1586600380669&a=getWordMean&c=search&list=1%2C2%2C3%2C4%2C5%2C8%2C9%2C10%2C12%2C13%2C14%2C15%2C18%2C21%2C22%2C24%2C3003%2C3004%2C3005&word=".$word."&_=1586600380672";


$url = "http://www.iciba.com/index.php?callback=jQuery19006722940878796992_1586600380669&a=getWordMean&c=search&word=".$word."&_=1586600380672";

$rawstr = file_get_contents($url);
// var_dump($rawstr);

$pattern='/\{.*\}/';
$res = preg_match($pattern,$rawstr,$matches);
$ajsonstr=$matches[0];
$jsarr = json_decode($ajsonstr,true);
// $soundlink = $jsarr['baesInfo']['symbols'][0]['ph_am_mp3'];
echo "<pre>";
print_r($jsarr);

// print_r($jsarr['baesInfo']['symbols'][0]['ph_other']);//音标əˈsəuʃieitɪŋ
// print_r($jsarr['baesInfo']['symbols'][0]['ph_en_mp3']);//通常有英美音的英音
// print_r($jsarr['baesInfo']['symbols'][0]['ph_am_mp3']);//通常有英美音的美音
// print_r($jsarr['baesInfo']['symbols'][0]['ph_tts_mp3']);//associating

// var_dump($jsarr);



// function existJudge($url){
//     switch ($url) {
//        case "http://www.iciba.com/":
//             $Exist = "true";
//             break;
//        case "http://dict.cn/":
//             $Exist = "false";
//             break;        
//        default:null;             
//     }
//     print_r($Exist);
// }

// // $url="http://www.iciba.com/";
// $url="http://dict.cn/";
// existJudge($url);  