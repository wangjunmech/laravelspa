<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FileController extends Controller
{
    public $file;
    public function __construct()
    {
        // $this->middleware('auth:api');//加上认证后不能直接通过url访问
        $this->file = "./note/NoteFile.txt";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return $this->formatOutput();//改为return后livereload不能刷新
    // print_r( $this->formatOutput() );//livereload可刷新

    }

    /**
     * Read from file and format content to array.
     *
     * @param  this->file
     * @return array
     */
    public function formatOutput(){

        if(file_exists($this->file)){
            $content = file_get_contents($this->file);
            $linesArr = explode("\r\n",rtrim($content));//rtrim清除最后一个换行标记
            return ($linesArr);
            }else{
                echo '文件不存在或错误！';
        }


    }
    /**
     * Read from file and format content to array.
     *
     * @param  $request
     * @return true/false
     */    
    public function putnote(Request $request){
        $data=$this->validate($request, [
            'note' => 'required|min:5',//
            'username' => 'required|min:5',//
        ]);
       
        // https://www.w3school.com.cn/php/php_file_open.asp
        // r   打开文件为只读。文件指针在文件的开头开始。
        // w   打开文件为只写。删除文件的内容或创建一个新的文件，如果它不存在。文件指针在文件的开头开始。
        // a   打开文件为只写。文件中的现有数据会被保留。文件指针在文件结尾开始。创建新的文件，如果文件不存在。
        // x   创建新文件为只写。返回 FALSE 和错误，如果文件已存在。
        // r+  打开文件为读/写、文件指针在文件开头开始。
        // w+  打开文件为读/写。删除文件内容或创建新文件，如果它不存在。文件指针在文件开头开始。
        // a+  打开文件为读/写。文件中已有的数据会被保留。文件指针在文件结尾开始。创建新文件，如果它不存在。
        // x+  创建新文件为读/写。返回 FALSE 和错误，如果文件已存在。
        $note = $request['note'];
        // return $note;
        $fp = fopen($this->file,'a+');//追加定稿
        // fwrite($fp,$note."\r\n");//写入文件内容
        fclose($fp);
        return $note;

    }

    //多图片上传处理
    public function loadimgs(Request $request){
        $imagesNum = count($request->images);
        // return count($images);//post传过来的文件个数
        // // $imgnum=count($images);
        $res='';
        if($imagesNum){
            foreach ($request->images as $image) {
                // json_encode($image);
                $res.=json_encode($image);
                // $image->store('images');
            }
        };

        return $res;
        // return 'uploaded successfully!';

    }
    public function responseMsg($code, $msg, $data){
        return response()->json([
            'code' => $code, // 0:成功，-1:未登录，-2:错误
            'msg'  => $msg,
            'data' => $data 
        ]);
    }
    public function filenamesmodifier(Request $request){
        // return $request;
        $dir = $request['mdir'];
        $da = $request['da'];
        $aa = $request['aa'];
        $db = $request['db'];
        $ab = $request['ab'];
        $m = $request['m'];
        $extin = $request['ext'];

        // //*************使用get调试API调试变量
        // $dir = '';
        // $aa = '';
        // $ab = '';
        // $da = '';
        // $db = '';
        // $m = '';
        // $extin = '';
        // // aa如果是增加字符串前缀
        // // ab如果是增加字符串后缀
        // // da如果是删除字符串前缀
        // // db如果是删除字符串后缀

        // $dir = 'I:\temp\临时文件夹333';
        // // $aa = '测试';//OK
        // // $ab = '测试';
        // // $da = '测试';//OK
        // // $db = '测试';
        // $m = '测试';
        // // $extin = 'jpg';
        // //*************使用get调试API调试变量

        
            function countstr($str){//计算字符数
                    $str =iconv_strlen($str,"UTF-8");
                    return $str;
                    };
            function str_insert($str, $pos, $substr){//在指定位置插入字符串str_insert("0123456789",指定位置,'插入内容');
                $startstr='';
                                            for($j=0; $j<$pos; $j++){
                                            $startstr .= $str[$j];
                                            }
                $laststr='';
                                            for ($j=$pos; $j<strlen($str); $j++){
                                            $laststr .= $str[$j];
                                            }
                                            $str = ($startstr . $substr . $laststr);
                                            return $str;
                                            } 
            //*********获取文件扩展名
            function get_extension($file){
                    return pathinfo($file, PATHINFO_EXTENSION);
                                }                           
            //*********获取文件扩展名

            //
            function get_basename($filename){  
                     return preg_replace('/^.+[\\\\\\/]/', '', $filename);  
                    }  
            function strhideMiddle($string,$max=20,$rep='[...]'){
                // $encode = mb_detect_encoding($string, array("ASCII",'UTF-8',"GB2312","GBK",'BIG5'));//ASCII
               $strlen = mb_strlen($string);
                if ($strlen <= $max)
                return $string;
                $lengthtokeep = $max - mb_strlen($rep);
                $start = 0;
                $end = 0;
                if (($lengthtokeep % 2) == 0) {
                $start = $lengthtokeep / 2;
                $end = $start;
                } else {
                $start = intval($lengthtokeep / 2);
                $end = $start + 1;
                }
                $i = $start;
                $tmp_string = $string;
                return mb_substr($string, 0, $start).$rep.mb_substr($string, - $end);
                }
                // echo strhideMiddle('这是一个美丽的春天，天气非常的冰爽，空气也很雨痕',20);


            function strcutmiddle($string,$k){
                $wlen = strlen($k);
                $pos = strpos($string,$k,3);
                if($pos<strlen($string)-$wlen){
                    $start = substr($string, 0, $pos);
                    $end = substr($string, $pos+strlen($k));
                // echo $start.'***************<br>';
                // echo $end.'***************<br>';
                // echo $start.$end.'<br>';
                return $start.$end;
                }

            }
        $resultinfo=''; //收集信息
        

     

            /*****************************************************/         
        $path = $dir;            
        $dirflag=is_dir(iconv('UTF-8','GB2312',$path));//判断路径是否存在，用iconv才能判断中文目录
        echo $path.'<br>';

            
        if(!($dirflag)){
            $resultinfo.= '<span class="a1">请输入正确的文件路径！</span><br>';
            return $resultinfo;
        }
        $endstr = substr($path,-1);//查找路径最后一个字符
        //路径处理，如果路径最后没有斜杠或反斜杠，加上/*或只加*
        if(strlen($path)>0 && $path!='/' && $path!='\\'){ //有路径提交上来并且路径不等于会影响路径操作glob(参数)的正或反斜杠,处理路径，加上*号或加上\*以便作为glob参数遍历目录
            if($endstr == '/' || $endstr == '\\' ){//如果有正或反斜杠只需要加*号，否则加上\*
                        $path=$path.'*';
                        }else{
                        $path=$path.'\*';
                        }
        }
            
            $resultinfo.='<span class="a1">操作处理结果：</span><br>';
            $lis =(glob($path));//用glob()方便地替代 opendir()和相关函数读取文件,不包含子目录

            // *******如果有指定文件后缀
            echo '<pre>';
            // print_r($lis);
            $filenum = count($lis);//计算目录下面文件和子目录的条数

            // *****筛选列表，根据后缀名
            $lisc=array();//下面循环将数组无数字符转换，否则不能正确显示
                for($i=0;$i<$filenum;$i++){                    
                    $ext= get_extension($lis[$i]);//读取文件扩展名
                    if($extin !='' && $extin==$ext){//如果有指定扩展名
                        $lisc[$i]=$lis[$i];
                        }
                    if($extin =='' && $ext!=""){//如果没有指定提扩展名则选择所有的文件进行操作
                        $lisc[$i]=$lis[$i];
                        }                                               
                }//循环结束
            // print_r($lisc);//需要处理的文件列表

            foreach ($lisc as $key => $value){
                // $oldname=iconv('GBK','UTF-8',$value);//
                $oldname=$value;//转换为UTF-8才能在浏览器中正常显示。
                $ext1=get_extension($oldname);//获取文件扩展名
                $leng=strlen($oldname);//文件名总长字数（包含路径字符）
                $oldfilename=get_basename($oldname);//获得文件名
                $oldpath = substr($oldname,0,$leng-strlen($oldfilename));//取得文件名前面的路径
                // echo $oldfilename.'<br>';
                            ///操作重命名******************************************/                                              
                            if(!empty($aa)){//如果是增加字符串前缀
                                 $newname=$oldpath.$aa.$oldfilename;
                                 $oldname1=iconv('UTF-8','GBK',$oldname);//转回GBK才能用rename函数
                                 $newname1=iconv('UTF-8','GBK',$newname);//转回GBK才能用rename函数
                                 $resultinfo .= $oldfilename.'-----增加了前缀"<font color=red>'.$aa.'</font>"----->'.get_basename($newname).'<br>';
                                 //echo $newname.'<br>';
                                 rename($oldname1,$newname1);       
                                }
                            if(!empty($ab)){//如果是增加字符串后缀
                                 $filenameNoext = basename($oldfilename,'.'.$ext1);
                                 $newname=$oldpath.$filenameNoext.$ab.'.'.$ext1;
                                 // echo $oldname.'========='.$newname.'<br>';       
                                 rename($oldname,$newname);       
                                }
                            if(!empty($da)){//如果是删除字符串前缀
                                if($da == substr($oldfilename,0,strlen($da))){
                                 $newname=$oldpath.substr($oldfilename,strlen($da));
                                 $resultinfo .= $oldfilename.'-----删除了前缀"<font color=red>'.$da.'</font>"----->'.get_basename($newname).'<br>';
                                 $oldname1=iconv('UTF-8','GBK',$oldname);//转回GBK才能用rename函数
                                 $newname1=iconv('UTF-8','GBK',$newname);//转回GBK才能用rename函数
                                 rename($oldname1,$newname1);                           
                                    };
                
                                }

                            if(!empty($db)){//如果是删除字符串后缀
                                $filenameNoext = basename($oldfilename,'.'.$ext1);                       
                                // echo substr($filenameNoext,-3).'<br>';
                                $cutLen = strlen($db);//计算字符长度，兼容中文
                                $newname = substr($filenameNoext,0,-$cutLen);
                                // echo $filenameNoext.'<br>';
                                // 判断文件名末尾几位是否是要删除的字符，如果是才执行，否则会误删
                                // echo strlen($db).'ddddddddddddbbbbbbbbbbb<br>';

                                if(substr($filenameNoext,-strlen($db))==$db){
                                    $newname=$oldpath.$newname.'.'.$ext1;                                    
                                echo $oldname.'========='.$newname.'<br>';       
                                rename($oldname,$newname);                         
                                };

                                }
                                
                            if(!empty($m)){//如果是删除文件名中间的指定字符串
                                $filenameNoext = basename($oldfilename,'.'.$ext1);                       
                                    // ****如果文件名的中间存在关键字才处理
                                    if(strpos($oldfilename,$m)== true){
                                    // echo ($filenameNoext).'=========文件名无后缀<br>'; 
                                    $tempname = strcutmiddle($filenameNoext,$m);
                                    $newname=$oldpath.$tempname.'.'.$ext1;                                    
                                    echo  $newname.'======='.$oldname.'<br>';
                                    rename($oldname,$newname);                                              
                                    };
                                }
            }//foreach遍历结束
        return $resultinfo;
    }


    public function cpfiles(Request $request){
        // 批量复制文件名
        // return $request;
        $odir = $request['odir'];
        $cpdir = $request['cpdir'];
        // $odir = "D:\\Screen snap";
        // $cpdir = "I:\\temp\临时文件夹";
        // $odir = "I:\\temp\临时文件夹";
        // $cpdir = "I:\\temp\临时文件夹222";
        // $cpinfo = 'handle copy file from '.$odir.' ==To==> '.$cpdir.' successfully！';
            //处理输入的新目录路径，如果没带斜杠，自动在尾加上\
            function autoadd_slash_end($dir){
                $endstr = substr($dir,-1);//查找最后一位
                if($endstr == '/' || $endstr == '\\' ){//如果有正或反斜杠只需要加*号，否则加上\*
                            $dir=$dir;
                            }else{
                            $dir=$dir.'\\';
                        }
                    return $dir;
            }
        $cpdir=autoadd_slash_end($cpdir);
        $odir=autoadd_slash_end($odir);

        // $cpinfo = 'handle copy file from '.$odir.' ==To==> '.$cpdir.' >>>>>>>>>>';
        // return $cpinfo;
        // $encode = mb_detect_encoding($odir, array("ASCII",'UTF-8',"GB2312","GBK",'BIG5'));//ASCII
        // return $encode;
        // **************如果目录目录不存在则创建
        function folderMaker($dir){   
            if(file_exists($dir)){  
                return ;  
            }  
            if(!is_dir(dirname($dir))){            
                folderMaker(dirname($dir));  
            }  
                mkdir($dir); 
        }         
        folderMaker($cpdir); 

        //*******判断目录是否有效
        if ( file_exists ( $odir ) && file_exists ( $cpdir )) {
            if ( is_dir ( $odir ) && is_dir ( $cpdir )){
                // 验证为目录
                // echo '验证为目录';
                $namelist=scandir($odir);//扫描源目录下的所有文件到数组中
                $num=count($namelist);//计算文件数

                // echo $namelist[15].'<=======>'.$filename;//可显示文件名
                // var_dump($namelist);

                //************复制文件到新目录
                //echo $cpdir.iconv ("GBK", "UTF-8",$namelist[5]);//文件名为新目录加上源文件中的文件名
                // $convdir1=iconv ("UTF-8","GBK", $odir.iconv ("GBK", "UTF-8",$namelist[5]));
                
                // $wpath=iconv ("UTF-8", "GBK",$cpdir);//新目录

                // // ********************iconv函数
                // string iconv ( string $in_charset , string $out_charset , string $str )
                // 将字符串 str 从 in_charset 转换编码到 out_charset。
                // // ********************

                
                $wpath = $cpdir;//新目录
                if(is_dir($wpath)){
                    $res=opendir($wpath);//打开新目录,循环执行写入             
                        for($i=2;$i<$num;$i++){//循环写入文件
                            //检查读取到的原文件是否是文件
                            // echo mb_detect_encoding($namelist[$i]).'---->'.$i.'===='.$namelist[$i].'<br>';
                            $filename = $cpdir.$namelist[$i];
                            if(is_dir($odir.$namelist[$i])){
                                continue;//如果是目录则不用复制
                            }
                            file_put_contents($filename,$i);//写入文件
                            echo $odir.'====>'.$filename.'<br>';    

                        }
                    closedir($res);//关闭目录
                    //"写入操作成功！";
                }else{
                    return '新目录有问题';
                }
            }else{
                return 'odir or cpdir have problem';
            }
        }else {
            return $odir.' OR '.$cpdir."目录不存在!<br>" ;
        }
    }

    public function makefolders(Request $request){
        // return 'php make folders';    
        // return $Request['createdir'];    
        $dir = $request['createdir']; 
        function folderMaker($dir){   
            if(file_exists($dir)){  
                return ;  
            }  
            if(!is_dir(dirname($dir))){            
                folderMaker(dirname($dir));  
            }  
                mkdir($dir); 
        }         
        folderMaker($dir); 
        return $dir.' 目录创建成功！'; 
    }
    public function removefolders(Request $request){
        // return 'php remove folders';
        // return $request['removedir'];    
        $dir = $request['removedir'];   
        // $dir = 'I:\\temp\\A'; 
        // return $dir;   
        // echo 'dddddddddddddddd';
        function folderKiller($dir,$lev=1,$force=0){

            if(!file_exists($dir)){  
                // echo $dir.'目录不存在<br>';  //先判断是否存在  
                return '目录不存在';   
            }  
            if(!is_dir($dir)){ //再判断是否为文件夹，写两个if（!）比写ifelse 嵌套看起来简洁多了    
                // echo '不是文件夹';  
                return '不是文件夹';  
            }    
            $fh=opendir($dir);  //来到这里说明已经验证过存在并且是文件夹  
                    while(($dirfile = readdir($fh))!==false){   
                        $files = $dir . '/' . $dirfile; //以后的判断都是这个而不是$dirfile   
                        if($dirfile == '.' || $dirfile == '..'){  
                            continue; //如果是.和..则略过    
                        }    
                        if(is_file($files)){  //判断是否为文件，是则删除文件
                            unlink($files);  //unlink删除文件
                            echo '删除 ' . str_repeat('-',$lev) . $files . '文件 成功<br>';  
                        }    
                        if(is_dir($files)){  //判断是否为文件夹，是则调用递归  
                            folderKiller($files,$lev+1);                       
                        }  
                    } 
                    closedir($fh);//删除前 先关闭资源          
                if(@rmdir($dir)){
                     echo '删除 ' . str_repeat('--',$lev) . $dir . '目录 成功<br>';
                }
                if($force=1){
                    folderKiller($dir); 
                } 
        };
        folderKiller($dir);


    }








}
