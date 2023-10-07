<?php

namespace App\Imports;

use App\Models\transport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportTransport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new transport([  
            'total_transport_per_deliverycost'=>$row['total_transport_per_deliverycost']
        ]);
    }
}
