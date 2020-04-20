<?php
namespace App\Imports;
use App\part;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
class PartImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        // return $collection;
                // var_dump($collection);exit();
        $i=1;

        foreach ($collection as $row) 
        {
        	// dump('then need to check in CustomerImport class,import need to set the status column into number!');
                // var_dump($row[0]);
                echo ($row[0].'===='.$i.'<br>');
                $i++;

            // Tool::create([
            //     'toolnumber' => $row[0],
            //     'toolmaker' => $row[1],
            //     'suppliercode' => '',
            //     'status' =>'',
            //     'remark' => '',
            // ]);

        }

    }
}
