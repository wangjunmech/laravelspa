<?php

namespace App\Http\Controllers\API;
use PHPHtmlParser\Dom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\article;
use Illuminate\Support\Facades\DB;

class DictController extends Controller
{
    public $word;
    public $dom;
    public $soundfile;
    public $meaningfile;
    public $dicturl;
    public function __construct()
    {
        // $this->middleware('auth:api');//加上认证后不能直接通过url访问
        $this->dom = new Dom();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){

        $this->word = $request['word'];
        //先检查声音文件目录中是否有声音。如果有就直接返回路径在前台播放
        if($this->checkLocalFile()) return $this->checkLocalFile();
                // return "setDictionary**************";

        //设置詡典网站并抓取
        return $this->setDictionary();  
        
    }
    public function checkLocalFile(){
        //判断本地文件是否存在
        $this->soundfile = "./dict/sound/".$this->word.'.mp3';
        $this->meaningfile = "./dict/meanings/".$this->word.'.txt';
        if(file_exists($this->soundfile) && file_exists($this->meaningfile)){
            $feedback = [];
            $feedback[0]=$this->soundfile;
            $feedback[1]=file_get_contents($this->meaningfile);
            return $feedback;
        }
    }
    public function setDictionary(){//设置词典网站
        // return "setDictionary**************";
            $this->dom->loadFromUrl('http://www.iciba.com/'.$this->word);       
            $soundExist = strpos($this->dom,"<span>美 [");//检查iciba返回是否有音标
        if(!$soundExist){            
            $this->dom->loadFromUrl('http://www.dict.cn/'.$this->word);
            $soundInDict = $this->dom->find('.fsound');
            return $this->parseByDictCn();
        }else{
            return $this->parseByIciba(); 
            // return 'parseByIciba()';            
        }
    }


    public function parseByDictCn(){
    // http://audio.dict.cn/fuTd30i6d5187f8de86419033ed9b776dfbeaa40.mp3?t=antonym
        // return 'parseByDictCn';
        // echo $this->word.'使用Dict解析！';
        $feedback = [];
        try{
            $sound=$this->dom->find('.fsound');
            $audio=$sound->getAttribute('naudio');
            $soundlink="http://audio.dict.cn/".$audio;
            //保存MP3
            $sresult = $this->saveAudio($soundlink);
            $fresult = $this->saveMeaningByDict();
                $feedback[0]=$sresult;
                $feedback[1]=$fresult;
                return $feedback; 
        }catch (Exception $e) {

            $feedback[0]= $e->getMessage();
            var_dump($feedback);
            return $feedback; 
        }

 
    }
    public function parseByIciba(){
        //说明：1.访问www.iciba.com/word,查看网络中的xhr两个异步请求，第二个index.php?callback=jQuery****的请求返回json数据
        //2.在json字符中取出word的音频地址
        //取得音频地址url+关键字：http://www.iciba.com/index.php?callback=jQuery19005872784845336227_1586596944796&a=getWordMean&c=search&list=1%2C2%2C3%2C4%2C5%2C8%2C9%2C10%2C12%2C13%2C14%2C15%2C18%2C21%2C22%2C24%2C3003%2C3004%2C3005&word=wind&_=1586596944799
        // echo $this->word.'使用iciba解析！';

        $feedback = [];
        try{
            // $url = "http://www.iciba.com/index.php?callback=jQuery19006722940878796992_1586600380669&a=getWordMean&c=search&word=".$this->word."&_=1586600380672";//异步查询的链接
            // $rawstr = file_get_contents($url);//解析json
            // // return $rawstr;
            // $pattern='/\{.*\}/';
            // $res = preg_match($pattern,$rawstr,$matches);
            // $ajsonstr=$matches[0];
            // $jsarr = json_decode($ajsonstr,true);
            // $soundlinkA = $jsarr['baesInfo']['symbols'][0]['ph_am_mp3'];
            // $soundlinkB = $jsarr['baesInfo']['symbols'][0]['ph_tts_mp3'];//如associating,parallels在数据中没有美式音
            // $soundlink = $soundlinkA ? $soundlinkA : $soundlinkB;

            $phonetic=$this->dom->find('.base-speak');
            $phoneticspan = $phonetic->find('span');
            $itag = $phoneticspan[1]->find('i');
            $slink = $itag->getAttribute('ms-on-mouseover');//sound('http://res.iciba.com/re/x/7xxx.mp3')

            preg_match('/\'.+\'/',$slink,$matches);//正则匹配
            $soundlink = $matches[0];//链接带有单引号
            //处理单引号
            $soundlink= substr($soundlink, 1,-1);
            // echo $soundlink;
            // die();

            $sresult = $this->saveAudio($soundlink);
            $fresult = $this->saveMeaningByIciba();
                $feedback[0]=$sresult;
                $feedback[1]=$fresult;
                // return $feedback;  

        }catch (Exception $e) {

            $feedback[0]= $e->getMessage();
            var_dump($feedback);
            return $feedback; 
        }

           
    }
    public function saveAudio($soundlink){
        $content = file_get_contents($soundlink);
        file_put_contents($this->soundfile,$content);
        return $this->soundfile; 
    }

    public function saveMeaningByIciba(){
        // return 'save file by iciba';
        // echo $this->dom;

        $phonetic=$this->dom->find('.base-speak');

        $translate=$this->dom->find('.base-list');
        $wordform=$this->dom->find('.change');

        $haskey=(empty($wordform)==null);//检查变量是否为空
        if(!$haskey){
            //如果带词形变化的，删除变形2字
            $h1=$wordform->find('h1')[0];

            $h1->delete();
        }
        // echo 'test....saveMeaningByIciba'.__line__.'!!!!!!!';return;
        $sentences=$this->dom->find('.section-p');
        // return $sentences;
        $mcontent = $phonetic.$wordform.$translate.$sentences; 
        file_put_contents($this->meaningfile, $mcontent);
        return $mcontent;
    }

    public function saveMeaningByDict(){
        // return 'save file by iciba ************';
        $phonetic=$this->dom->find('.phonetic');
        $wordform=$this->dom->find('.shape');
        $translate=$this->dom->find('.base-list');
        $sentences=$this->dom->find('article-section');
        // return $sentences;
        $mcontent = $phonetic.$wordform.$translate.$sentences; 
        file_put_contents($this->meaningfile.'.txt', $mcontent);
        return $mcontent;
    }


    public function savearticle(Request $request){
            // return 'save file by iciba 保存阅读************';
            // return 'save article on backend';
            // return $request['article'];
            // return $request['articletitle'];
        $user = auth('api')->user();//获取用户的信息
        $userid=$user['id'];
        $newwords=$request['newwords'];// 
        $request['user_id']=$userid;
        $request['newwords']=implode(";",$newwords);


        $data = $this->validate($request, [
            'user_id' => 'required',//
            'articletitle' => 'required|min:10',//
            'article' => 'required|min:50',//
            'newwords' => 'sometimes',
        ]);
  
        return article::create($data);
    }
    public function articlelist(Request $request){
        $user = auth('api')->user();//获取用户的信息
        $userid=$user['id'];
        // return $userid;

        // //***********用DB的whereColumn方法查询数据******OK
        // $articles = DB::table('articles')
        //         ->whereColumn([
        //             ['user_id', '=', $userid],
        //         ])->paginate(10);//使用DB的whereColumn方法条件选择
  

        //***********走弯路
        // $articles = article::all();
        // $articles = $articles->intersect(article::whereIn('user_id', [$userid])->get());//有条件筛选
        // $articles = $articles->intersect(article::whereIn('user_id', [$userid])->paginate(3));//可以分页但未显示 
        // $articles = article::where('user_id','=',$userid)->get();//能返回数据不能分页
        // $articles = article::where('user_id','=',$userid)->select("user_id")->get()->paginate(10);//不能在get()方法后面加分页

        //***********用模型的where条件查询数据******OK
        // $articles = article::where('user_id','=',$userid)->paginate(10);//根据条件分页OK
        // $articles = article::where('user_id','=',$userid)->select("articletitle",'created_at')->paginate(10);//根据条件分页OK,仅选择想要的列
        $articles = article::where('user_id','=',$userid)->latest()->paginate(2);//根据条件分页OK,latest方法倒序选择，
        return $articles;

    }
    
    public function __destruct(){
        $this->dom='';
        // echo 'destruct.....************'; //对象销毁时输出
    }    

    
}
