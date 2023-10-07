<?php

namespace App\Imports;

use App\Models\Fertilizer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportFertilizer implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Fertilizer([
            'no_ofsacks'=>$row ['no_ofsacks'],
            'unitprice_per_sacks'=>$row ['unitprice_per_sacks'],
            'total_cost_fertilizers'=> $row ['total_cost_fertilizers'],
        ]);
    }
}
