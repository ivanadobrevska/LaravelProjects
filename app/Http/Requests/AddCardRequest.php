<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCardRequest extends FormRequest
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
            'company_name'=>'required',
            'discount'=>'required',
            'category'=>'required',
            'thumbnail'=>'required|mimes:png',
            'description'=>'required',
            'website'=>'required',
            'facebook'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'google_maps'=>'required',
            'address'=>'required',
            'image_one'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'company_name.required' => 'Внесете го името на компанијата',
            'discount.required'  => 'Внесете го видот на попустот',
            'category.required'=>'Внесете ја категоријата',
            'thumbnail.required'=>'Внесете thumbnail',
            'thumbnail.mimes'=>'Сликата треба да биде во .png формат',
            'description.required'=>'Внесете го описот',
            'website.required'=>'Внесете го линкот до вашата вебстрана',
            'facebook.required'=>'Внесете го линкот до вашата фејсбук страна',
            'phone.required'=>'Внесете го телефонскиот број',
            'email.required'=>'Внесете ја вашата емаил адреса',
            'google_maps.required'=>'Внесете го линкот до вашата адреса',
            'address.required'=>'Внесете ја вашата адреса',
            'image_one.required'=>'Внесете барем една слика'
        ];
    }
}
