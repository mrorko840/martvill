<?php

namespace Modules\Tax\Database\Seeders;

use Illuminate\Database\Seeder;

class TaxRatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('tax_rates')->delete();

        \DB::table('tax_rates')->insert(array (
            0 =>
            array (
                'id' => 90,
                'tax_class_id' => 1,
                'country' => NULL,
                'state' => NULL,
                'city' => NULL,
                'postcode' => NULL,
                'name' => 'Sales',
                'tax_rate' => '2.00000000',
                'priority' => 1,
                'compound' => 1,
                'shipping' => 0,
                'sort_by' => 0,
            ),
            1 =>
            array (
                'id' => 91,
                'tax_class_id' => 1,
                'country' => 'bd',
                'state' => NULL,
                'city' => NULL,
                'postcode' => NULL,
                'name' => 'VAT',
                'tax_rate' => '3.00000000',
                'priority' => 2,
                'compound' => 0,
                'shipping' => 0,
                'sort_by' => 8,
            ),
            2 =>
            array (
                'id' => 92,
                'tax_class_id' => 1,
                'country' => 'in',
                'state' => NULL,
                'city' => NULL,
                'postcode' => NULL,
                'name' => 'GST',
                'tax_rate' => '5.00000000',
                'priority' => 2,
                'compound' => 0,
                'shipping' => 0,
                'sort_by' => 8,
            ),
            3 =>
            array (
                'id' => 93,
                'tax_class_id' => 1,
                'country' => 'gb',
                'state' => NULL,
                'city' => NULL,
                'postcode' => NULL,
                'name' => 'VAT',
                'tax_rate' => '20.00000000',
                'priority' => 3,
                'compound' => 1,
                'shipping' => 1,
                'sort_by' => 8,
            ),
            4 =>
            array (
                'id' => 94,
                'tax_class_id' => 1,
                'country' => 'gb',
                'state' => NULL,
                'city' => NULL,
                'postcode' => NULL,
                'name' => 'VAT',
                'tax_rate' => '5.00000000',
                'priority' => 3,
                'compound' => 1,
                'shipping' => 1,
                'sort_by' => 8,
            ),
            5 =>
            array (
                'id' => 95,
                'tax_class_id' => 1,
                'country' => 'gb',
                'state' => NULL,
                'city' => NULL,
                'postcode' => NULL,
                'name' => 'VAT',
                'tax_rate' => '0.00000000',
                'priority' => 3,
                'compound' => 1,
                'shipping' => 1,
                'sort_by' => 8,
            ),
            6 =>
            array (
                'id' => 96,
                'tax_class_id' => 1,
                'country' => 'us',
                'state' => NULL,
                'city' => NULL,
                'postcode' => NULL,
                'name' => 'US',
                'tax_rate' => '10.00000000',
                'priority' => 3,
                'compound' => 1,
                'shipping' => 1,
                'sort_by' => 8,
            ),
            7 =>
            array (
                'id' => 97,
                'tax_class_id' => 1,
                'country' => 'us',
                'state' => 'AL',
                'city' => NULL,
                'postcode' => '90210',
                'name' => 'US AL',
                'tax_rate' => '2.00000000',
                'priority' => 4,
                'compound' => 1,
                'shipping' => 1,
                'sort_by' => 13,
            ),
            8 =>
            array (
                'id' => 98,
                'tax_class_id' => 1,
                'country' => 'us',
                'state' => 'AL',
                'city' => NULL,
                'postcode' => '20500',
                'name' => 'US AL',
                'tax_rate' => '2.00000000',
                'priority' => 4,
                'compound' => 1,
                'shipping' => 1,
                'sort_by' => 13,
            ),
        ));


    }
}
