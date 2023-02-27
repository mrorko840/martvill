<?php

namespace Modules\Shipping\Database\Seeders;

use Illuminate\Database\Seeder;

class ShippingZonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('shipping_zones')->delete();

        \DB::table('shipping_zones')->insert(array (
            0 =>
            array (
                'id' => 4,
                'name' => 'Bangladesh - Barishal',
            ),
            1 =>
            array (
                'id' => 6,
                'name' => 'Bangladesh - Chittagong',
            ),
            2 =>
            array (
                'id' => 1,
                'name' => 'Bangladesh - Dhaka',
            ),
            3 =>
            array (
                'id' => 2,
                'name' => 'Bangladesh - Khulna',
            ),
            4 =>
            array (
                'id' => 3,
                'name' => 'Bangladesh - Mymensingh',
            ),
            5 =>
            array (
                'id' => 8,
                'name' => 'Bangladesh - Rajshahi',
            ),
            6 =>
            array (
                'id' => 5,
                'name' => 'Bangladesh - Rangpur',
            ),
            7 =>
            array (
                'id' => 7,
                'name' => 'Bangladesh - Sylhet',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Global',
            ),
        ));


    }
}
