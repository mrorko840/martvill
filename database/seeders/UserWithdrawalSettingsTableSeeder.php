<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserWithdrawalSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_withdrawal_settings')->delete();
        
        \DB::table('user_withdrawal_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'withdrawal_method_id' => 1,
                'param' => '{"email":"testuser@gmail.com"}',
                'is_default' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 3,
                'withdrawal_method_id' => 2,
                'param' => '{"account_holder_name":"Jamal","branch_name":"Uttara","bank_account_number":"458796587456","branch_city":"Dhaka","swift_code":"587469","branch_address":"Uttara","bank_name":"Dutch Bangla","country":"Bangladesh"}',
                'is_default' => 0,
            ),
        ));
        
        
    }
}