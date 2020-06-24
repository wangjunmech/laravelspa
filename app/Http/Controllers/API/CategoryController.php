<?php

namespace App\Http\Controllers\API;

use App\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customized\Classes\Tree;

class CategoryController extends Controller
{
    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        function objectToArray($object) {
            //laravel collection转为数组的函数
            //先编码成json字符串，再解码成数组
            return json_decode(json_encode($object), true);
        }

        $data = category::all();
       

        // $data = $data->map(function ($name, $key) {
        //     return $name->name;
        // });
        // $data->toArray();

        $data=objectToArray($data);


        // dd($data);
        //         exit;
        $T = new Tree();

        $res = $T->sortTree($data,0,0);//列出全部树
        // $res = $T->ancester($data,5);//列出家谱树
        // $res = $T->Ancestry($data,5,0);//列出家谱树

        /***************测试数组*****************/


        // /******************************/
        // $T = new Tree();
        // // $res = $T->getTree($area,1);
        // // $res = $T->getTree($area,0);
        // // $res = $T->sortTree($area,0,0);
        // // $res = $T->sortTree($area,14,0);
        // $res = $T->navtree($area,17,0);
        // // $res = $T->ancester($area,16,0);
        // // $res = $T->progeny($area,14,0);


        // //**********输出结果
        //         echo '<pre>';
        //         print_r($res);
        //         // echo '</pre>';
        //         echo '<hr>';
        //         foreach ($res as $value) {
        //             $lev = $value['lev'];
        //             echo str_repeat("**",$value['lev']).$value['name']."<br>";
        //         }
        // //**********返回结果
                return $res;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
}
