<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomValidateRequest extends FormRequest
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
            'name' => 'required|string|max:30',
            'address' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'company_address' => 'required|string|max:255',
            'phone_number' => 'required|regex:/^(08)[0-9]{9,11}$/|unique:investors',
            'actor_status' => 'required|string|max:30',
            'short_description' => 'required|string|max:255',
            'username' => 'required|string|min:3|max:16|unique:investors',
            'email' => 'required|string|email|max:255|unique:investors',
            'password' => 'required|string|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'phone_number.regex' => 'Kolom nomor telepon harus angka, diawali dengan \'08\' dan diantara 11 hingga 13 digit',
            'password.regex' => 'Kolom password setidaknya terdiri dari: <ui><li>1 huruf kecil</li><li>1 huruf besar</li>
            <li>1 bilangan angka</li><li>1 karakter spesial !@#$%^&</li><li>8 karakter atau lebih</li>',
        ];
    }
}
