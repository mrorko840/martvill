<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderStatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('order_statuses')->delete();

        \DB::table('order_statuses')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Pending Payment',
                'slug' => 'pending-payment',
                'color' => '#9FA9A2',
                'payment_scenario' => 'unpaid',
                'is_default' => 1,
                'order_by' => 1,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Failed',
                'slug' => 'failed',
                'color' => '#FF003F',
                'payment_scenario' => 'unpaid',
                'is_default' => 0,
                'order_by' => 2,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Processing',
                'slug' => 'processing',
                'color' => '#58CE76',
                'payment_scenario' => 'paid',
                'is_default' => 0,
                'order_by' => 3,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Completed',
                'slug' => 'completed',
                'color' => '#0000E2',
                'payment_scenario' => 'paid',
                'is_default' => 0,
                'order_by' => 4,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'On hold',
                'slug' => 'on-hold',
                'color' => '#FF7F00',
                'payment_scenario' => 'unpaid',
                'is_default' => 0,
                'order_by' => 5,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Cancelled',
                'slug' => 'cancelled',
                'color' => '#9FA9A2',
                'payment_scenario' => 'unpaid',
                'is_default' => 0,
                'order_by' => 6,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Refunded',
                'slug' => 'refunded',
                'color' => '#9FA9A2',
                'payment_scenario' => 'unpaid',
                'is_default' => 0,
                'order_by' => 7,
            ),
        ));


    }
}
