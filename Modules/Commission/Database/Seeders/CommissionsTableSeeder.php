<?php

namespace Modules\Commission\Database\Seeders;

use Illuminate\Database\Seeder;

class CommissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('commissions')->delete();

        \DB::table('commissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'is_active' => 1,
                'is_category_based' => 1,
                'amount' => 3.0,
            ),
        ));


    }
}
