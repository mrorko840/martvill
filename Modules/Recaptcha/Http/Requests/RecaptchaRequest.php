<?php

/**
 * @package RecaptchaRequest
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 07-04-22
 */

namespace Modules\Recaptcha\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecaptchaRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return config('recaptcha.validation')['rules'];
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
        return config('recaptcha.validation')['attributes'];
    }
}
