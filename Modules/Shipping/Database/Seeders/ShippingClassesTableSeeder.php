<?php

namespace Modules\Shipping\Database\Seeders;

use Illuminate\Database\Seeder;

class ShippingClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('shipping_classes')->delete();

        \DB::table('shipping_classes')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'No shipping class cost',
                'slug' => 'no-class',
                'description' => NULL,
                'product_count' => 0,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Heavy weight',
                'slug' => 'heavy',
                'description' => 'This class should be apply on heavy weight product',
                'product_count' => 0,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Light weight',
                'slug' => 'light',
                'description' => 'This class should be apply on light weight product',
                'product_count' => 0,
            ),
        ));


    }
}
