<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            //
            'name'=>'required|string',
            'email'=>'required|email|unique:users',
            'address'=>'required',
            'country'=>'required',
            'role_id'=>'required',
            'is_active'=>'required',
            'password'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'address.required' => 'Address is required',
            'country.required' => 'Country is required',
            'password.required' => 'Password is required'
        ];
    }
}
