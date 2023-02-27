<?php

/**
 * @package AuthorizeNetRequest
 * @author TechVillage <support@techvill.org>
 * @contributor Md. Mostafijur Rahman <[mostafijur.techvill@gmail.com]>
 * @created 08-01-2023
 */

namespace Modules\AuthorizeNet\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorizeNetRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return config('authorizenet.validation')['rules'];
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
        return config('authorizenet.validation')['attributes'];
    }
}
