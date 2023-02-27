<?php

namespace App\Http\Requests\Admin;

use App\Rules\CheckValidEmail;
use App\Rules\CheckValidFile;
use App\Rules\CheckValidPhone;
use App\Rules\CheckValidURL;
use Illuminate\Foundation\Http\FormRequest;

class UpdateVendorRequest extends FormRequest
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
            'name' => 'required|min:3|max:80|unique:vendors,name,' . $this->id,
            'email' => ['required','max:99', 'unique:vendors,email,' . $this->id, new CheckValidEmail],
            'phone' => ['required', 'min:10', 'max:45', new CheckValidPhone],
            'formal_name' => 'max:99',
            'website' => ['nullable', 'max:255', new CheckValidURL],
            'status' => 'required|in:Pending,Active,Inactive',
            'sell_commissions' =>'nullable|numeric',
            'logo'  => ['nullable', new CheckValidFile(getFileExtensions(3))],
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
            'status.in' => __('Status must be Active, Inactive or Pending')
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'email' => __('Email Address'),
        ];
    }
}
