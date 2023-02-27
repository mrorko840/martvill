<?php

namespace Modules\Coinbase\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoinbaseRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return config('coinbase.validation')['rules'];
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
        return config('coinbase.validation')['attributes'];
    }
}
