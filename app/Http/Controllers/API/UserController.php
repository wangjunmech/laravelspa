<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::latest()->paginate(5);
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
}
