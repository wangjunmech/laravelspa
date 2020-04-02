<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$this->validate($request, [
            'name' => 'required|unique:users',//验证users表的唯一性，但不能验证大小定，验证规则没写正确有错误不能反馈到前台，提交模态框停止不工作。
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        // return ['message'=>"get data from UserController.store"];
        return User::create($data);//写入数据库

        // return $request;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function profile()
    {
        return auth('api')->user();
    }
    public function profileUpdate(Request $request)
    {
        $user=auth("api")->user();
        //表单验证
        // return $request;


        // return '$request';
        // // //如果有提交图片，检查对比图片是否与原图一致
        if($request->photo){  
        // 检查图片是否已经存在          


        //如果有提交图片，处理存放图片，查看图片data为Base64格式
            // return __line__;
            // return $request->photo;

            try{
                $Oname = pathinfo($request->photoname, PATHINFO_FILENAME);//去除原文件名后缀
                $filename = $Oname.'_'.time().".".explode('/',explode(':', substr($request->photo,0,strpos($request->photo,';')))[1])[1];//查找扩展名拼接文件名
                //自定义函数--****--循环创建文件目录函数
                function mk_dir($dir, $mode = 0755)
                    {
                    if (is_dir($dir) || @mkdir($dir,$mode)) return true;
                    if (!mk_dir(dirname($dir),$mode)) return false;
                    return @mkdir($dir,$mode);
                    };

                    $dir = public_path('img\test\profile\\');//图片存放目录
                    file_exists($dir) ? '' : mk_dir($dir);//检查如果目录不存在则创建
                    \Image::make($request->photo)->save($dir.$filename);//保存图片到目录中
                    // return $filename;

                    //删除旧的图片如果有旧图片
                    if($user->photo){                    
                    $OldImg=public_path('img\test\profile\\').$user->photo;
                    unlink($OldImg);
                    };

                    }catch(Exception $e){
                            return $e->getMessage();
                };        

                $dir.$filename;//完整图片文件路径
                $request['photo']=$filename;//写入数据表的内容改为文件名储存，前台提交的是Base64的代码
                // 验证表单
                // return($filename);
                $data=$this->validate($request, [
                    'name' => 'required|unique:users,name'.$user->id,//Vform验证的写法，要不要会因为验证唯一性不能过
                    'email' => 'required|email|unique:users,email,'.$user->id,
                    'password' => 'sometimes',
                    'photo' => 'sometimes',
                    'bio' => 'sometimes',
                    'type' => 'sometimes',
                ]);
        }else{
            // 验证表单,如果没有图片提交
            $data=$this->validate($request, [
                'name' => 'required|unique:users,name'.$user->id,//Vform验证的写法，要不然会因为验证唯一性不能过
                'email' => 'required|email|unique:users,email,'.$user->id,
                'password' => 'sometimes',
                'bio' => 'sometimes',
                'type' => 'sometimes',
            ]);

        };


        // // //更新用户profile资料并返回数据
        try{
            // 更新后返回数据到数据库
            $user->update($data);
            // 如果有图片返回图片名，没有图片返回OK
            if($request->photo){
                return ['status'=>'OK','img'=>$filename];
            };
            return ['status'=>'OK'];

            }catch(Exception $e){
                return $e->getMessage();
            };
            return $request;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

            // 'email' => 'required|email|unique:users,email,'.$user->id,

        $data = $this->validate($request, [
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'sometimes',
        ]);
        $user->update($data);
        // return ['msg'=>$request];
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{            
            $user=User::findOrFail($id);
            $user->delete();
        }catch (Exception $e) {
            echo $e->getMessage();
            return $e->getMessage();
            }
        return ['msg'=>1];
    }
    /**
     *
     * @param  int  $str
     * @return Users[]
     */
    public function searchuser()
    {
        if($search = \Request::get('k')){
            $users = User::where(function($query) use ($search){
                $query->where('name','LIKE',"%$search%")->orWhere('email','LIKE',"%$search%");
            })->paginate(10);
        }
        return $users;
    }
}
