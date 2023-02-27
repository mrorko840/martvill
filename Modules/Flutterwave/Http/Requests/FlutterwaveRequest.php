<?php

/**
 * @package FlutterwaveRequest
 * @author TechVillage <support@techvill.org>
 * @contributor Kabir Ahemd <[kabir.techvill@gmail.com]>
 * @created 11-05-2022
 */

namespace Modules\Flutterwave\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FlutterwaveRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return config('flutterwave.validation')['rules'];
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
        return config('flutterwave.validation')['attributes'];
    }
}
