<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeedRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        $rule= [
            // 'name_of_fertilizer'=>[
            //     'required',
            //     'string',
            //     'max:50',
            // ],
            // 'type_of_fertilizer'=>[
            //     'required',
            //     'string',
            //     'max:50',
            // ],
            'unit'=>[
                'required',
                'string',
                'max:50',
            ],
            'quantity'=>[
                'required',
                'string',
                'max:50',
            ],
            'unit_price'=>[
                'required',
                'string',
                'max:50',
            ],
            'total_seed_cost'=>[
                'required',
                'string',
                'max:50',
            ],
           
        ];
        return $rule;
    }
    public function messages(){
       return [
            // 'name_of_fertilizer.required'=>'Please input name of fertilizer',
            // 'type of fertilizer.required'=>'Please input type of fertilizer',
            'unit.required'=>'Please input unit',
            'quantity.required'=>'Please input quantity',
            'unit_price.required'=>'Please input total labor cost',
            'total_seed_cost.required'=>'Please input total seed cost',
       ];
    }
}
