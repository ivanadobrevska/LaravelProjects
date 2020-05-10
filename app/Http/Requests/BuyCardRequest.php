<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuyCardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'company_name'=>'required',
            'num_employees'=>'required|numeric',
            'phone_number'=>'required'
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'Внесете име и презиме',
        'company_name.required'  => 'Внесете го името на компанијата',
        'num_employees.required'=>'Внесете го бројот на вработени',
        'num_employees.numeric'=>'Внесете број',
        'phone_number.required'=>'Внесете го телефонскиот број'
    ];
}
}
