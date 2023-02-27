<?php

/**
 * @package SslCommerzRequest
 * @author techvillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 29-10-2022
 */

namespace Modules\SslCommerz\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SslCommerzRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return config('sslcommerz.validation')['rules'];
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
        return config('sslcommerz.validation')['attributes'];
    }
}
