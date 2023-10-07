<?php

namespace App\Imports;

use App\Models\VariableCost;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportVariableCost implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new VariableCost([
            'total_machinery_fuel_cost'=>$row ['total_machinery_fuel_cost'],
            'total_variable_cost'=>$row ['total_variable_cost'],
        ]);
    }
}
