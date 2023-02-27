<?php

namespace Modules\CMS\Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('sliders')->delete();

        \DB::table('sliders')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Home Page',
                'slug' => 'home-page',
                'status' => 'Active',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Grocery',
                'slug' => 'grocery',
                'status' => 'Active',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Fashion',
                'slug' => 'fashion',
                'status' => 'Active',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Fashion - Accessories',
                'slug' => 'fashion-accessories',
                'status' => 'Active',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Mixed Primary',
                'slug' => 'mixed',
                'status' => 'Active',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Mixed Secondary',
                'slug' => 'mixed-secondary',
                'status' => 'Active',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Fashion V2 Primary',
                'slug' => 'fashion-v2-primary',
                'status' => 'Active',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Fashion V2 Secondary',
                'slug' => 'fashion-v2-secondary',
                'status' => 'Active',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Fashion V3.1',
                'slug' => 'fashion-v31',
                'status' => 'Active',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Fashion V3.2',
                'slug' => 'fashion-v32',
                'status' => 'Active',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Fashion V3.3',
                'slug' => 'fashion-v33',
                'status' => 'Active',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Fashion V3.4',
                'slug' => 'fashion-v34',
                'status' => 'Active',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Fashion V3.5',
                'slug' => 'fashion-v35',
                'status' => 'Active',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Furniture V1.1',
                'slug' => 'furniture-v11',
                'status' => 'Active',
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Furniture V1.2',
                'slug' => 'furniture-v12',
                'status' => 'Active',
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'Furniture V1.3',
                'slug' => 'furniture-v13',
                'status' => 'Active',
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Fashion V4.1',
                'slug' => 'fashion-v41',
                'status' => 'Active',
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'Digital V1.1',
                'slug' => 'digital-v11',
                'status' => 'Active',
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'Digital V1.2',
                'slug' => 'digital-v12',
                'status' => 'Active',
            ),
        ));
    }
}
