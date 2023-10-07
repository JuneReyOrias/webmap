<?php

namespace App\Imports;

use App\Models\Pesticide;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportPesticide implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pesticide([
            'no_of_l_kg'=>$row['no_of_l_kg'],
            'unitprice_ofpesticides'=>$row['unitprice_ofpesticides'],
            'total_cost_pesticides'=>$row['total_cost_pesticides'],
        ]);
    }
}
