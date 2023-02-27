<?php

namespace Modules\Tax\Database\Seeders;

use Illuminate\Database\Seeder;

class TaxClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('tax_classes')->delete();

        \DB::table('tax_classes')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Standard',
                'slug' => 'standard',
            ),
        ));


    }
}
