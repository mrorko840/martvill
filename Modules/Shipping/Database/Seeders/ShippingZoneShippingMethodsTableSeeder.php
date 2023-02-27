<?php

namespace Modules\Shipping\Database\Seeders;

use Illuminate\Database\Seeder;

class ShippingZoneShippingMethodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('shipping_zone_shipping_methods')->delete();

        \DB::table('shipping_zone_shipping_methods')->insert(array (
            0 =>
            array (
                'id' => 172,
                'shipping_zone_id' => 1,
                'shipping_method_id' => 3,
                'method_title' => 'Flat Rate',
                'tax_status' => 'taxable',
                'cost' => '1.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => 'class',
                'requirements' => NULL,
                'status' => 1,
            ),
            1 =>
            array (
                'id' => 173,
                'shipping_zone_id' => 1,
                'shipping_method_id' => 2,
                'method_title' => 'Local Pickup',
                'tax_status' => 'none',
                'cost' => '0.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => NULL,
                'requirements' => NULL,
                'status' => 1,
            ),
            2 =>
            array (
                'id' => 174,
                'shipping_zone_id' => 1,
                'shipping_method_id' => 1,
                'method_title' => 'Free Shipping',
                'tax_status' => NULL,
                'cost' => '0.00000000',
                'cost_type' => NULL,
                'calculation_type' => '0',
                'requirements' => '',
                'status' => 0,
            ),
            3 =>
            array (
                'id' => 175,
                'shipping_zone_id' => 2,
                'shipping_method_id' => 3,
                'method_title' => 'Flat Rate',
                'tax_status' => 'taxable',
                'cost' => '1.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => 'order',
                'requirements' => NULL,
                'status' => 1,
            ),
            4 =>
            array (
                'id' => 176,
                'shipping_zone_id' => 2,
                'shipping_method_id' => 2,
                'method_title' => 'Local Pickup',
                'tax_status' => 'none',
                'cost' => '2.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => NULL,
                'requirements' => NULL,
                'status' => 1,
            ),
            5 =>
            array (
                'id' => 177,
                'shipping_zone_id' => 2,
                'shipping_method_id' => 1,
                'method_title' => 'Free Shipping',
                'tax_status' => NULL,
                'cost' => '0.00000000',
                'cost_type' => NULL,
                'calculation_type' => '0',
                'requirements' => '',
                'status' => 0,
            ),
            6 =>
            array (
                'id' => 178,
                'shipping_zone_id' => 3,
                'shipping_method_id' => 3,
                'method_title' => 'Flat Rate',
                'tax_status' => 'taxable',
                'cost' => '0.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => 'order',
                'requirements' => NULL,
                'status' => 1,
            ),
            7 =>
            array (
                'id' => 179,
                'shipping_zone_id' => 3,
                'shipping_method_id' => 2,
                'method_title' => 'Local Pickup',
                'tax_status' => 'none',
                'cost' => '0.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => NULL,
                'requirements' => NULL,
                'status' => 1,
            ),
            8 =>
            array (
                'id' => 180,
                'shipping_zone_id' => 3,
                'shipping_method_id' => 1,
                'method_title' => 'Free Shipping',
                'tax_status' => NULL,
                'cost' => '0.00000000',
                'cost_type' => NULL,
                'calculation_type' => '0',
                'requirements' => '',
                'status' => 0,
            ),
            9 =>
            array (
                'id' => 181,
                'shipping_zone_id' => 4,
                'shipping_method_id' => 3,
                'method_title' => 'Flat Rate',
                'tax_status' => 'taxable',
                'cost' => '3.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => 'class',
                'requirements' => NULL,
                'status' => 1,
            ),
            10 =>
            array (
                'id' => 182,
                'shipping_zone_id' => 4,
                'shipping_method_id' => 2,
                'method_title' => 'Local Pickup',
                'tax_status' => 'none',
                'cost' => '0.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => NULL,
                'requirements' => NULL,
                'status' => 1,
            ),
            11 =>
            array (
                'id' => 183,
                'shipping_zone_id' => 4,
                'shipping_method_id' => 1,
                'method_title' => 'Free Shipping',
                'tax_status' => NULL,
                'cost' => '0.00000000',
                'cost_type' => NULL,
                'calculation_type' => '0',
                'requirements' => '',
                'status' => 0,
            ),
            12 =>
            array (
                'id' => 184,
                'shipping_zone_id' => 5,
                'shipping_method_id' => 3,
                'method_title' => 'Flat Rate',
                'tax_status' => 'taxable',
                'cost' => '2.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => 'class',
                'requirements' => NULL,
                'status' => 1,
            ),
            13 =>
            array (
                'id' => 185,
                'shipping_zone_id' => 5,
                'shipping_method_id' => 2,
                'method_title' => 'Local Pickup',
                'tax_status' => 'none',
                'cost' => '1.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => NULL,
                'requirements' => NULL,
                'status' => 1,
            ),
            14 =>
            array (
                'id' => 186,
                'shipping_zone_id' => 5,
                'shipping_method_id' => 1,
                'method_title' => 'Free Shipping',
                'tax_status' => NULL,
                'cost' => '0.00000000',
                'cost_type' => NULL,
                'calculation_type' => '0',
                'requirements' => '',
                'status' => 0,
            ),
            15 =>
            array (
                'id' => 187,
                'shipping_zone_id' => 6,
                'shipping_method_id' => 3,
                'method_title' => 'Flat Rate',
                'tax_status' => 'taxable',
                'cost' => '2.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => 'order',
                'requirements' => NULL,
                'status' => 1,
            ),
            16 =>
            array (
                'id' => 188,
                'shipping_zone_id' => 6,
                'shipping_method_id' => 2,
                'method_title' => 'Local Pickup',
                'tax_status' => 'none',
                'cost' => '1.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => NULL,
                'requirements' => NULL,
                'status' => 1,
            ),
            17 =>
            array (
                'id' => 189,
                'shipping_zone_id' => 6,
                'shipping_method_id' => 1,
                'method_title' => 'Free Shipping',
                'tax_status' => NULL,
                'cost' => '0.00000000',
                'cost_type' => NULL,
                'calculation_type' => '0',
                'requirements' => '',
                'status' => 0,
            ),
            18 =>
            array (
                'id' => 190,
                'shipping_zone_id' => 7,
                'shipping_method_id' => 3,
                'method_title' => 'Flat Rate',
                'tax_status' => 'taxable',
                'cost' => '1.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => 'class',
                'requirements' => NULL,
                'status' => 1,
            ),
            19 =>
            array (
                'id' => 191,
                'shipping_zone_id' => 7,
                'shipping_method_id' => 2,
                'method_title' => 'Local Pickup',
                'tax_status' => 'none',
                'cost' => '1.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => NULL,
                'requirements' => NULL,
                'status' => 1,
            ),
            20 =>
            array (
                'id' => 192,
                'shipping_zone_id' => 7,
                'shipping_method_id' => 1,
                'method_title' => 'Free Shipping',
                'tax_status' => NULL,
                'cost' => '0.00000000',
                'cost_type' => NULL,
                'calculation_type' => '0',
                'requirements' => '',
                'status' => 1,
            ),
            21 =>
            array (
                'id' => 193,
                'shipping_zone_id' => 8,
                'shipping_method_id' => 3,
                'method_title' => 'Flat Rate',
                'tax_status' => 'taxable',
                'cost' => '2.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => 'class',
                'requirements' => NULL,
                'status' => 1,
            ),
            22 =>
            array (
                'id' => 194,
                'shipping_zone_id' => 8,
                'shipping_method_id' => 2,
                'method_title' => 'Local Pickup',
                'tax_status' => 'none',
                'cost' => '1.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => NULL,
                'requirements' => NULL,
                'status' => 1,
            ),
            23 =>
            array (
                'id' => 195,
                'shipping_zone_id' => 8,
                'shipping_method_id' => 1,
                'method_title' => 'Free Shipping',
                'tax_status' => NULL,
                'cost' => '0.00000000',
                'cost_type' => NULL,
                'calculation_type' => '0',
                'requirements' => '',
                'status' => 0,
            ),
            24 =>
            array (
                'id' => 196,
                'shipping_zone_id' => 9,
                'shipping_method_id' => 3,
                'method_title' => 'Flat Rate',
                'tax_status' => 'taxable',
                'cost' => '10.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => 'order',
                'requirements' => NULL,
                'status' => 1,
            ),
            25 =>
            array (
                'id' => 197,
                'shipping_zone_id' => 9,
                'shipping_method_id' => 2,
                'method_title' => 'Local Pickup',
                'tax_status' => 'none',
                'cost' => '1.00000000',
                'cost_type' => 'cost_per_order',
                'calculation_type' => NULL,
                'requirements' => NULL,
                'status' => 1,
            ),
            26 =>
            array (
                'id' => 198,
                'shipping_zone_id' => 9,
                'shipping_method_id' => 1,
                'method_title' => 'Free Shipping',
                'tax_status' => NULL,
                'cost' => '0.00000000',
                'cost_type' => NULL,
                'calculation_type' => '0',
                'requirements' => '',
                'status' => 0,
            ),
        ));


    }
}
