<?php

namespace Modules\Shipping\Database\Seeders;

use Illuminate\Database\Seeder;

class ShippingMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('shipping_methods')->delete();

        \DB::table('shipping_methods')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Free shipping',
                'description' => NULL,
                'status' => 'Active',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Local Pickup',
                'description' => NULL,
                'status' => 'Active',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Fixed',
                'description' => NULL,
                'status' => 'Active',
            ),
        ));


    }
}
