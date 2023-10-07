<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VariableCostRequest extends FormRequest
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
            'total_machinery_fuel_cost'=>[
                'required',
                'string',
                'max:50',
            ],
            'total_variable_cost'=>[
                'required',
                'string',
                'max:50',
            ],
            // 'total_labor_cost'=>[
            //     'required',
            //     'string',
            //     'max:50',
            // ],
           
        ];
        return $rule;
    }
    public function messages(){
       return [
            // 'name_of_fertilizer.required'=>'Please input name of fertilizer',
            // 'type of fertilizer.required'=>'Please input type of fertilizer',
            'total_machinery_fuel_cost.required'=>'Please input total machinery fuel cost',
            'total_variable_cost.required'=>'Please input total variable cost',
            // 'total_labor_cost.required'=>'Please input total labor cost',
       ];
    }
}
