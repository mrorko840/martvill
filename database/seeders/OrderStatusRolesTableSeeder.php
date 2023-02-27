<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderStatusRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('order_status_roles')->delete();

        \DB::table('order_status_roles')->insert(array (
            0 =>
            array (
                'order_status_id' => 1,
                'role_id' => 1,
            ),
            1 =>
            array (
                'order_status_id' => 1,
                'role_id' => 2,
            ),
            2 =>
            array (
                'order_status_id' => 2,
                'role_id' => 1,
            ),
            3 =>
            array (
                'order_status_id' => 2,
                'role_id' => 2,
            ),
            4 =>
            array (
                'order_status_id' => 3,
                'role_id' => 1,
            ),
            5 =>
            array (
                'order_status_id' => 4,
                'role_id' => 1,
            ),
            6 =>
            array (
                'order_status_id' => 5,
                'role_id' => 1,
            ),
            7 =>
            array (
                'order_status_id' => 3,
                'role_id' => 2,
            ),
            8 =>
            array (
                'order_status_id' => 4,
                'role_id' => 2,
            ),
            9 =>
            array (
                'order_status_id' => 5,
                'role_id' => 2,
            ),
            10 =>
            array (
                'order_status_id' => 6,
                'role_id' => 2,
            ),
            11 =>
            array (
                'order_status_id' => 7,
                'role_id' => 2,
            ),
            12 =>
            array (
                'order_status_id' => 6,
                'role_id' => 1,
            ),
            13 =>
            array (
                'order_status_id' => 7,
                'role_id' => 1,
            ),
        ));


    }
}
