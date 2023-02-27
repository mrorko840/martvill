<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VendorUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vendor_users')->delete();
        
        \DB::table('vendor_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'vendor_id' => 1,
                'user_id' => 1,
                'status' => 'Active',
            ),
            1 => 
            array (
                'id' => 2,
                'vendor_id' => 16,
                'user_id' => 15,
                'status' => 'Pending',
            ),
            2 => 
            array (
                'id' => 3,
                'vendor_id' => 17,
                'user_id' => 16,
                'status' => 'Pending',
            ),
            3 => 
            array (
                'id' => 4,
                'vendor_id' => 18,
                'user_id' => 17,
                'status' => 'Pending',
            ),
            4 => 
            array (
                'id' => 5,
                'vendor_id' => 19,
                'user_id' => 18,
                'status' => 'Pending',
            ),
            5 => 
            array (
                'id' => 6,
                'vendor_id' => 20,
                'user_id' => 19,
                'status' => 'Pending',
            ),
            6 => 
            array (
                'id' => 7,
                'vendor_id' => 2,
                'user_id' => 3,
                'status' => 'Pending',
            ),
            7 => 
            array (
                'id' => 8,
                'vendor_id' => 21,
                'user_id' => 21,
                'status' => 'Active',
            ),
            8 => 
            array (
                'id' => 9,
                'vendor_id' => 22,
                'user_id' => 22,
                'status' => 'Pending',
            ),
            9 => 
            array (
                'id' => 10,
                'vendor_id' => 23,
                'user_id' => 23,
                'status' => 'Pending',
            ),
            10 => 
            array (
                'id' => 11,
                'vendor_id' => 24,
                'user_id' => 24,
                'status' => 'Pending',
            ),
            11 => 
            array (
                'id' => 12,
                'vendor_id' => 25,
                'user_id' => 25,
                'status' => 'Pending',
            ),
        ));
        
        
    }
}