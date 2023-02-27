<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WalletsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wallets')->delete();
        
        \DB::table('wallets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 15,
                'currency_id' => 3,
                'balance' => '1571.40000000',
                'is_default' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 18,
                'currency_id' => 3,
                'balance' => '304.58000000',
                'is_default' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'currency_id' => 3,
                'balance' => '129.98000000',
                'is_default' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 3,
                'currency_id' => 3,
                'balance' => '48.50000000',
                'is_default' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 2,
                'currency_id' => 3,
                'balance' => '215.00000000',
                'is_default' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 7,
                'currency_id' => 3,
                'balance' => '75.00000000',
                'is_default' => 1,
            ),
        ));
        
        
    }
}