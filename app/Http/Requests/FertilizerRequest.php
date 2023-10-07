<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FertilizerRequest extends FormRequest
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
            'no_ofsacks'=>[
                'required',
                'string',
                'max:50',
            ],
            'unitprice_per_sacks'=>[
                'required',
                'string',
                'max:50',
            ],
            'total_cost_fertilizers'=>[
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
            'no_ofsacks.required'=>'Please input no of sacks',
            'unitprice_per_sacks.required'=>'Please input unit price per sacks',
            'total_cost_fertilizers.required'=>'Please input total cost fertilizers',
       ];
    }
}
