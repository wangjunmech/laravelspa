<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customized\Classes\Tree;

class WebSpiderController extends Controller
{
    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return $request;
        $word = $request->get('w');
        if(empty($word)){
            return '请在地址栏输入参数;取得百度翻译发音保存文件到sounds\elements\单词.mp3，参数格式?w=单词';
        }
        $wordlink = 'https://fanyi.baidu.com/gettts?lan=uk&text='.$word.'&spd=3&source=web';

        //判断网络资源是否有效，
        function varify_url($url){ 
            $check = @fopen($url,"r"); 
            if($check){ 
             $status = true; 
            }else{ 
             $status = false; 
            }  
            return $status; 
            }
            if(!varify_url($wordlink)){ 
                return 'Bad internet connection!!!';
            }

        $sound = file_get_contents($wordlink);
        // $type = gettype($sound);
        echo file_put_contents('sounds\elements\\'.$word.".mp3",$sound);
        echo '保存文件'.'sounds\elements\\'.$word.".mp3".'完成';

        
    }

      public function fileexistchk(Request $request)
    {
        // return $request;
        $fpath = $request->get('path');
        if(file_exists($fpath)){
            echo 1;
        }else{
            echo 0;
        }

        
    }

    
}
