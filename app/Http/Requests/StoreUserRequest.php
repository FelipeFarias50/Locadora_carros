<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:80',
            'mobile' => 'required|digits:11',
            'address1' => 'required|email|max:80',
            'postcode' => 'required|digits:11',
            'state' => 'required|string|in:ES,RJ,SP,MG',
            'street' => 'required|string|max:80',
            'suburb' => 'required|string|max:80',
            'apt_number' => 'string|numeric|required_if:house_number,null',
            'house_number' => 'string|numeric|required_if:apt_number,null',
         ];
    }
}
