<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('languages')->delete();

        \DB::table('languages')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'English',
                'short_name' => 'en',
                'flag' => 'en.jpg',
                'status' => 'Active',
                'is_default' => 1,
                'direction' => 'ltr',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Bengali',
                'short_name' => 'bn',
                'flag' => NULL,
                'status' => 'Active',
                'is_default' => 0,
                'direction' => 'ltr',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'French',
                'short_name' => 'fr',
                'flag' => '',
                'status' => 'Active',
                'is_default' => 0,
                'direction' => 'ltr',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Chinese',
                'short_name' => 'zh',
                'flag' => NULL,
                'status' => 'Active',
                'is_default' => 0,
                'direction' => 'ltr',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Arabic',
                'short_name' => 'ar',
                'flag' => NULL,
                'status' => 'Active',
                'is_default' => 0,
                'direction' => 'rtl',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Byelorussian',
                'short_name' => 'be',
                'flag' => NULL,
                'status' => 'Active',
                'is_default' => 0,
                'direction' => 'ltr',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Bulgarian',
                'short_name' => 'bg',
                'flag' => NULL,
                'status' => 'Active',
                'is_default' => 0,
                'direction' => 'ltr',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Catalan',
                'short_name' => 'ca',
                'flag' => NULL,
                'status' => 'Active',
                'is_default' => 0,
                'direction' => 'ltr',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Estonian',
                'short_name' => 'et',
                'flag' => NULL,
                'status' => 'Active',
                'is_default' => 0,
                'direction' => 'ltr',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Dutch',
                'short_name' => 'nl',
                'flag' => NULL,
                'status' => 'Active',
                'is_default' => 0,
                'direction' => 'ltr',
            ),
        ));


    }
}
