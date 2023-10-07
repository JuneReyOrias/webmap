<?php

namespace App\Imports;

use App\Models\LastProductionDatas;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportLastProductionDatas implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new LastProductionDatas([
            'seeds_typed_used'=>$row ['seeds_typed_used'],
            'seeds_used_in_kg'=>$row ['seeds_used_in_kg'],
            'seed_source'=>$row ['seed_source'],
            'no_of_fertilizer_used_in_bags'=>$row ['no_of_fertilizer_used_in_bags'],
            'no_of_pesticides_used_in_l_per_kg'=>$row ['no_of_pesticides_used_in_l_per_kg'],
            'no_of_insecticides_used_in_l'=>$row ['no_of_insecticides_used_in_l'],
            'area_planted'=>$row ['area_planted'],
            'date_planted'=>$row ['date_planted'],
            'date_harvested'=>$row ['date_harvested'],
            'yield_tons_per_kg'=>$row ['yield_tons_per_kg'],
            'unit_price_palay_per_kg'=>$row ['unit_price_palay_per_kg'],
            'unit_price_rice_per_kg'=>$row ['unit_price_rice_per_kg'],
            'type_of_product'=>$row ['type_of_product'],
            'sold_to'=>$row ['sold_to'],
            'if_palay_milled_where'=>$row ['if_palay_milled_where'],
            'gross_income_palay'=>$row ['gross_income_palay'],
            'gross_income_rice'=>$row ['gross_income_rice'],
        ]);
    }
}
