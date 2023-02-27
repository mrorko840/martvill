<?php

namespace Modules\Shipping\Database\Seeders;

use Illuminate\Database\Seeder;

class ShippingZoneShippingClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('shipping_zone_shipping_classes')->delete();

        \DB::table('shipping_zone_shipping_classes')->insert(array (
            0 =>
            array (
                'id' => 172,
                'shipping_zone_id' => 1,
                'shipping_class_slug' => 'no-class',
                'cost' => '0.00000000',
                'cost_type' => 'cost_per_order',
            ),
            1 =>
            array (
                'id' => 173,
                'shipping_zone_id' => 1,
                'shipping_class_slug' => 'heavy',
                'cost' => '2.00000000',
                'cost_type' => 'cost_per_order',
            ),
            2 =>
            array (
                'id' => 174,
                'shipping_zone_id' => 1,
                'shipping_class_slug' => 'light',
                'cost' => '1.00000000',
                'cost_type' => 'cost_per_order',
            ),
            3 =>
            array (
                'id' => 175,
                'shipping_zone_id' => 2,
                'shipping_class_slug' => 'no-class',
                'cost' => '0.00000000',
                'cost_type' => 'cost_per_order',
            ),
            4 =>
            array (
                'id' => 176,
                'shipping_zone_id' => 2,
                'shipping_class_slug' => 'heavy',
                'cost' => '4.00000000',
                'cost_type' => 'cost_per_order',
            ),
            5 =>
            array (
                'id' => 177,
                'shipping_zone_id' => 2,
                'shipping_class_slug' => 'light',
                'cost' => '1.00000000',
                'cost_type' => 'cost_per_order',
            ),
            6 =>
            array (
                'id' => 178,
                'shipping_zone_id' => 3,
                'shipping_class_slug' => 'no-class',
                'cost' => '0.00000000',
                'cost_type' => 'cost_per_order',
            ),
            7 =>
            array (
                'id' => 179,
                'shipping_zone_id' => 3,
                'shipping_class_slug' => 'heavy',
                'cost' => '2.00000000',
                'cost_type' => 'cost_per_order',
            ),
            8 =>
            array (
                'id' => 180,
                'shipping_zone_id' => 3,
                'shipping_class_slug' => 'light',
                'cost' => '1.00000000',
                'cost_type' => 'cost_per_order',
            ),
            9 =>
            array (
                'id' => 181,
                'shipping_zone_id' => 4,
                'shipping_class_slug' => 'no-class',
                'cost' => '0.00000000',
                'cost_type' => 'cost_per_order',
            ),
            10 =>
            array (
                'id' => 182,
                'shipping_zone_id' => 4,
                'shipping_class_slug' => 'heavy',
                'cost' => '3.00000000',
                'cost_type' => 'cost_per_order',
            ),
            11 =>
            array (
                'id' => 183,
                'shipping_zone_id' => 4,
                'shipping_class_slug' => 'light',
                'cost' => '2.00000000',
                'cost_type' => 'cost_per_order',
            ),
            12 =>
            array (
                'id' => 184,
                'shipping_zone_id' => 5,
                'shipping_class_slug' => 'no-class',
                'cost' => '0.00000000',
                'cost_type' => 'cost_per_order',
            ),
            13 =>
            array (
                'id' => 185,
                'shipping_zone_id' => 5,
                'shipping_class_slug' => 'heavy',
                'cost' => '3.00000000',
                'cost_type' => 'cost_per_order',
            ),
            14 =>
            array (
                'id' => 186,
                'shipping_zone_id' => 5,
                'shipping_class_slug' => 'light',
                'cost' => '1.00000000',
                'cost_type' => 'cost_per_order',
            ),
            15 =>
            array (
                'id' => 187,
                'shipping_zone_id' => 6,
                'shipping_class_slug' => 'no-class',
                'cost' => '0.00000000',
                'cost_type' => 'cost_per_order',
            ),
            16 =>
            array (
                'id' => 188,
                'shipping_zone_id' => 6,
                'shipping_class_slug' => 'heavy',
                'cost' => '4.00000000',
                'cost_type' => 'cost_per_order',
            ),
            17 =>
            array (
                'id' => 189,
                'shipping_zone_id' => 6,
                'shipping_class_slug' => 'light',
                'cost' => '2.00000000',
                'cost_type' => 'cost_per_order',
            ),
            18 =>
            array (
                'id' => 190,
                'shipping_zone_id' => 7,
                'shipping_class_slug' => 'no-class',
                'cost' => '0.00000000',
                'cost_type' => 'cost_per_order',
            ),
            19 =>
            array (
                'id' => 191,
                'shipping_zone_id' => 7,
                'shipping_class_slug' => 'heavy',
                'cost' => '2.00000000',
                'cost_type' => 'cost_per_order',
            ),
            20 =>
            array (
                'id' => 192,
                'shipping_zone_id' => 7,
                'shipping_class_slug' => 'light',
                'cost' => '1.00000000',
                'cost_type' => 'cost_per_order',
            ),
            21 =>
            array (
                'id' => 193,
                'shipping_zone_id' => 8,
                'shipping_class_slug' => 'no-class',
                'cost' => '0.00000000',
                'cost_type' => 'cost_per_order',
            ),
            22 =>
            array (
                'id' => 194,
                'shipping_zone_id' => 8,
                'shipping_class_slug' => 'heavy',
                'cost' => '3.00000000',
                'cost_type' => 'cost_per_order',
            ),
            23 =>
            array (
                'id' => 195,
                'shipping_zone_id' => 8,
                'shipping_class_slug' => 'light',
                'cost' => '1.00000000',
                'cost_type' => 'cost_per_order',
            ),
            24 =>
            array (
                'id' => 196,
                'shipping_zone_id' => 9,
                'shipping_class_slug' => 'no-class',
                'cost' => '0.00000000',
                'cost_type' => 'cost_per_order',
            ),
            25 =>
            array (
                'id' => 197,
                'shipping_zone_id' => 9,
                'shipping_class_slug' => 'heavy',
                'cost' => '20.00000000',
                'cost_type' => 'cost_per_order',
            ),
            26 =>
            array (
                'id' => 198,
                'shipping_zone_id' => 9,
                'shipping_class_slug' => 'light',
                'cost' => '5.00000000',
                'cost_type' => 'cost_per_order',
            ),
        ));


    }
}
