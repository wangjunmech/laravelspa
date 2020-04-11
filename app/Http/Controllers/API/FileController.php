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

}
