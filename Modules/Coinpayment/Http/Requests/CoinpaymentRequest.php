<?php

namespace Modules\Coinpayment\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoinpaymentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return config('coinpayment.validation')['rules'];
    }

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
     * Attributes custom names
     *
     * @return array
     */
    public function attributes()
    {
        return config('coinpayment.validation')['attributes'];
    }
}
