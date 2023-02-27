<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableWithoutDummyDataSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Agatha Williams',
                'email' => 'admin@techvill.net',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zXgnp.9rIXbNYr3ZUo7xVOWUhKKHXJZ63nBgT1zLFgi0CG6RUgfxG',
                'phone' => NULL,
                'birthday' => NULL,
                'gender' => 'Male',
                'address' => NULL,
                'sso_account_id' => NULL,
                'sso_service' => NULL,
                'remember_token' => NULL,
                'status' => 'Active',
                'activation_code' => NULL,
                'activation_otp' => NULL,
            )
        ));


    }
}
