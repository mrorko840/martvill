<?php

namespace Modules\Shop\Database\Seeders;

use Illuminate\Database\Seeder;

class ShopsWithoutDummyDataSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('shops')->delete();

        \DB::table('shops')->insert(array (
            0 =>
            array (
                'id' => 1,
                'vendor_id' => 1,
                'name' => 'Henry\'s Shop',
                'email' => 'henry012045@gmail.com',
                'website' => NULL,
                'alias' => 'henry-william',
                'address' => 'House no: 19, Road no: 01',
                'country' => 'au',
                'state' => '7',
                'city' => 'bonegilla',
                'post_code' => '6280',
                'phone' => '0135467989',
                'fax' => NULL,
                'description' => NULL,
                'status' => 'Active',
            ),
        ));
    }
}
