<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Excel;
use App\Tool;
use App\Exports\ToolExport;
use App\Imports\ToolImport;
class ExcelController extends Controller
{
 public function export()
 {
    // return Excel::download(new CustomerExport, 'CustomerExport.xlsx');

 }
 public function import()
 {
    // dump('first need to set one real path in ExcelController@import');
    // $data = Excel::import(new CustomerImport, 'D:\History of RAW plastic.xlsx');//仅限路径测试
  // $data = Excel::import(new CustomerImport, 'D:\Customer.xlsx');
 }
}
