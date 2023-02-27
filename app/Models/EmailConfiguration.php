<?php
/**
 * @package EmailConfiguration
 * @author TechVillage <support@techvill.org>
 * @contributor Sabbir Al-Razi <[sabbir.techvill@gmail.com]>
 * @created 20-05-2021
 */

namespace App\Models;

use App\Models\Model;
use App\Rules\{
  CheckValidEmail
};
use Validator;

class EmailConfiguration extends Model
{
    /**
     * timestamps
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Validation
     * @param array $data
     * @return mixed
     */
    protected static function validation($data = [])
    {
        $validator = Validator::make($data, [
            'protocol' => 'required|in:smtp,sendmail',
            'encryption' => 'required_if:protocol,smtp',
            'smtp_host' => 'required_if:protocol,smtp',
            'smtp_port' => 'required_if:protocol,smtp',
            'smtp_email' => ['required_if:protocol,smtp', 'email', new CheckValidEmail],
            'from_address' => ['required_if:protocol,smtp', 'email', new CheckValidEmail],
            'from_name' => ['required_if:protocol,smtp'],
            'smtp_username' => ['required_if:protocol,smtp'],
            'smtp_password' => 'required_if:protocol,smtp'
        ]);

        return $validator;
    }

    /**
     * Store
     * @param array $request
     * @return boolean
     */
    public function store($request = [])
    {
        if (parent::updateOrInsert(['id' => 1], $request)) {
            self::forgetCache();
            return true;
        }

       return false;
    }

}
