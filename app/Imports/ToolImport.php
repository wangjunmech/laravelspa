<?php
namespace App\Imports;
use App\tool;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;//xlsx文件的多表导入
class ToolImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            'other' => new FirstSheetImport(),//表名=>导入类名
            'dx' => new DxSheetImport(),
        ];
    }



}
