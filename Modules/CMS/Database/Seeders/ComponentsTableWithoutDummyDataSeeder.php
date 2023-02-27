<?php

namespace Modules\CMS\Database\Seeders;

use Illuminate\Database\Seeder;

class ComponentsTableWithoutDummyDataSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('components')->delete();

        \DB::table('components')->insert(array (
            0 =>
            array (
                'id' => 2,
                'page_id' => 5,
                'layout_id' => 5,
                'level' => 2,
            ),
            1 =>
            array (
                'id' => 3,
                'page_id' => 5,
                'layout_id' => 2,
                'level' => 3,
            ),
            2 =>
            array (
                'id' => 4,
                'page_id' => 5,
                'layout_id' => 2,
                'level' => 4,
            ),
            3 =>
            array (
                'id' => 6,
                'page_id' => 5,
                'layout_id' => 1,
                'level' => 5,
            ),
            4 =>
            array (
                'id' => 15,
                'page_id' => 5,
                'layout_id' => 4,
                'level' => 6,
            ),
            5 =>
            array (
                'id' => 16,
                'page_id' => 5,
                'layout_id' => 3,
                'level' => 7,
            ),
            6 =>
            array (
                'id' => 17,
                'page_id' => 5,
                'layout_id' => 2,
                'level' => 8,
            ),
            7 =>
            array (
                'id' => 18,
                'page_id' => 5,
                'layout_id' => 6,
                'level' => 9,
            ),
            8 =>
            array (
                'id' => 19,
                'page_id' => 5,
                'layout_id' => 8,
                'level' => 1,
            )
        ));
    }
}
