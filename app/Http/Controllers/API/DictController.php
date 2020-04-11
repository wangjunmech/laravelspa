<?php

namespace App\Http\Controllers\API;
use PHPHtmlParser\Dom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DictController extends Controller
{
    public $word;
    public $dom;
    public $dicturl;
    public function __construct()
    {
        // $this->middleware('auth:api');//加上认证后不能直接通过url访问
        $this->dom = new Dom();
    }
    public function setDictionary($url){
        $this->dicturl=$url;
    }
    public function existJudge($url){
        switch ($url) {
           case "http://www.iciba.com/":
                $Exist = $this->dom->find('.new-speak-step')[0];
                return $Exist;
           case "http://dict.cn/":
                $Exist = $this->dom->find('.not')[0];
                return $Exist;
           default:false;             
        };
        return $Exist;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){

        $word = $request['word'];
        $this->word = $word;
        // $this->setDictionary("http://dict.cn/");//设置词典网站
        $this->setDictionary("http://www.iciba.com/");//设置词典网站
        $this->dom->load($this->dicturl.$word);
        $html = $this->dom->outerHtml;
        $Exist=$this->existJudge($this->dicturl); 
        if($Exist){
            // return '单词存在！';
            // return $this->parseByDictCn($html);
            return $this->parseByIciba($word);

        }else{
            return '词典中找不到单词！';        
        }       
        
    }
    /**
     * Read from file and format content to array.
     *
     * @param  $
     * @return content
     */    
    public function parseByDictCn($word){
    // http://audio.dict.cn/fuTd30i6d5187f8de86419033ed9b776dfbeaa40.mp3?t=antonym
        // return $word.'单词存在于dict.cn！';
        // $meaning=
        // return $this->dom;
        $sound=$this->dom->find('.fsound');
        $audio=$sound->getAttribute('naudio');
        $soundlink="http://audio.dict.cn/".$audio;
        //保存MP3
        $filename=$this->saveDictAudio($soundlink); 
        return $soundlink.'||||'.$filename;

        // $selectArr = []; 
        // $selectArr['meaning']='0000';
        // $selectArr['synonym']='1111';
        // $selectArr['antonym']='2222';
        // $selectArr['sound']=$soundlink;
        // return $selectArr; 
    }
    public function parseByIciba($word){
        // return $word.'单词存在于iciba！';
        //说明：1.访问www.iciba.com/word,查看网络中的xhr两个异步请求，第二个index.php?callback=jQuery****的请求返回json数据
        //2.在json字符中取出word的音频地址
//取得音频地址url+关键字：http://www.iciba.com/index.php?callback=jQuery19005872784845336227_1586596944796&a=getWordMean&c=search&list=1%2C2%2C3%2C4%2C5%2C8%2C9%2C10%2C12%2C13%2C14%2C15%2C18%2C21%2C22%2C24%2C3003%2C3004%2C3005&word=wind&_=1586596944799
        $url = "http://www.iciba.com/index.php?callback=jQuery19006722940878796992_1586600380669&a=getWordMean&c=search&word=".$word."&_=1586600380672";//异步查询的链接
        $rawstr = file_get_contents($url);//解析json
        // return $rawstr;
        $pattern='/\{.*\}/';
        $res = preg_match($pattern,$rawstr,$matches);
        $ajsonstr=$matches[0];
        $jsarr = json_decode($ajsonstr,true);

        $soundlinkA = $jsarr['baesInfo']['symbols'][0]['ph_am_mp3'];
        $soundlinkB = $jsarr['baesInfo']['symbols'][0]['ph_tts_mp3'];//如associating,parallels在数据中没有美式音
        $soundlink = $soundlinkA ? $soundlinkA : $soundlinkB;
        $res = $this->saveIcibaAudio($soundlink,$word);
        return $res;
     
    }
     public function saveDictAudio($soundlink){
        $dir = "./dict/s1/";
        $name=explode('=', $soundlink)[1];
        $filename = $dir.$name.'.mp3';
        $content = file_get_contents($soundlink);
        file_put_contents($filename,$content);
        return $filename; 
    }
     public function saveIcibaAudio($soundlink,$name){
        $dir = "./dict/s1/";
        $filename = $dir.$name.'.mp3';
        $content = file_get_contents($soundlink);
        file_put_contents($filename,$content);
        return $filename; 
    }
    

    
}
