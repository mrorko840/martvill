<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_users')->delete();
        
        \DB::table('role_users')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'user_id' => 1,
            ),
            1 => 
            array (
                'role_id' => 2,
                'user_id' => 3,
            ),
            2 => 
            array (
                'role_id' => 3,
                'user_id' => 2,
            ),
            3 => 
            array (
                'role_id' => 3,
                'user_id' => 4,
            ),
            4 => 
            array (
                'role_id' => 3,
                'user_id' => 6,
            ),
            5 => 
            array (
                'role_id' => 3,
                'user_id' => 5,
            ),
            6 => 
            array (
                'role_id' => 3,
                'user_id' => 8,
            ),
            7 => 
            array (
                'role_id' => 3,
                'user_id' => 7,
            ),
            8 => 
            array (
                'role_id' => 3,
                'user_id' => 9,
            ),
            9 => 
            array (
                'role_id' => 2,
                'user_id' => 15,
            ),
            10 => 
            array (
                'role_id' => 2,
                'user_id' => 16,
            ),
            11 => 
            array (
                'role_id' => 2,
                'user_id' => 17,
            ),
            12 => 
            array (
                'role_id' => 2,
                'user_id' => 18,
            ),
            13 => 
            array (
                'role_id' => 2,
                'user_id' => 19,
            ),
            14 => 
            array (
                'role_id' => 3,
                'user_id' => 20,
            ),
            15 => 
            array (
                'role_id' => 2,
                'user_id' => 21,
            ),
            16 => 
            array (
                'role_id' => 2,
                'user_id' => 22,
            ),
            17 => 
            array (
                'role_id' => 2,
                'user_id' => 23,
            ),
            18 => 
            array (
                'role_id' => 2,
                'user_id' => 24,
            ),
            19 => 
            array (
                'role_id' => 2,
                'user_id' => 25,
            ),
        ));
        
        
    }
}