<?php

namespace App\Http\Controllers;

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
        return '非API控制器的测试路由，需要在web.php中设置路由,';
        
    }

    
}
