<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvestmenPackageFormValidation extends FormRequest
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
            'name' => 'required|string|unique:investment_packages',
            'breeder_name' => 'required|string',
            'typeChicken' => 'required|string',
            'grazier_name' => 'required|string',
            'cost' => 'required|integer|min:1',
            'seller_name' => 'required|string',
            'chickenPriceOffer' => 'required|integer|min:1',
            'totalCapital' => 'required|integer|min:1',
            'income' => 'required|integer|min:1',
        ];
    }
}
