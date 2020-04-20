<?php
namespace App\Exports;
use Excel;
use App\Tool;
use Maatwebsite\Excel\Concerns\FromCollection;
class ToolExport implements FromCollection
{
    public function collection()
    {
        $data = Tool::all();//获取全部数据
        $data =$data->whereBetween('id',[1,10]);//获取指定数据
        return $data;
    }}
