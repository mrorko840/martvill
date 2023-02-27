<?php
/**
 * @package WithdrawalMethod
 * @author TechVillage <support@techvill.org>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 20-02-2022
 */
namespace App\Models;
use App\Models\Model;

class WithdrawalMethod extends Model
{
    public $timestamps = false;


    /**
     * Relation with UserWithdrawalSetting model
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function withdrawalSetting()
    {
        return $this->hasOne(UserWithdrawalSetting::class)->where('user_id', auth()->user()->id);
    }

    /**
     * Update
     * @param array $request
     * @return array
     */
    public function updateData($data = [])
    {
        $withdrawal = [];
        foreach ($data as $key => $value) {
            $withdrawal[] = ['method_name' => ucFirst($key), 'status' => $value];
        }

        if (parent::upsert($withdrawal, ['method_name'], ['status'])) {
            self::forgetCache();
            return 1;
        }
        return 0;
    }
}
