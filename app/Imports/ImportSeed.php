<?php

namespace App\Imports;

use App\Models\Seed;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportSeed implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Seed([
            'unit'=>$row ['unit'],
            'quantity'=>$row ['quantity'],
            'unit_price'=>$row ['unit_price'],
            'total_seed_cost'=>$row ['total_seed_cost'],
        ]);
    }
}
