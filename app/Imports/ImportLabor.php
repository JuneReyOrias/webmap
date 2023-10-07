<?php

namespace App\Imports;

use App\Models\Labor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportLabor implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Labor([
            'no_of_person'=>$row ['no_of_person'],
            'rate_per_person'=>$row ['rate_per_person'],
            'total_labor_cost'=>$row ['total_labor_cost'],
        ]);
    }
}
