<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WithdrawalMethodsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('withdrawal_methods')->delete();

        \DB::table('withdrawal_methods')->insert(array (
            0 =>
            array (
                'id' => 1,
                'method_name' => 'Paypal',
                'status' => 'Active',
            ),
            1 =>
            array (
                'id' => 2,
                'method_name' => 'Bank',
                'status' => 'Active',
            ),
        ));
    }
}
