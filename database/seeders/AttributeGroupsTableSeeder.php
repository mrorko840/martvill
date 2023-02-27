<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('attribute_groups')->delete();

        \DB::table('attribute_groups')->insert(array (
            0 =>
            array (
                'id' => 28,
                'vendor_id' => 1,
                'name' => 'smartphone_Attributes',
                'summary' => 'This is the attribute group that contains body attributes of smartphone',
                'status' => 'Active',


            ),
            1 =>
            array (
                'id' => 29,
                'vendor_id' => 1,
                'name' => 'Feature_Phone_Attributes',
                'summary' => 'This is the attribute group that contains body attributes of Feature Phone',
                'status' => 'Active',


            ),
            2 =>
            array (
                'id' => 30,
                'vendor_id' => 1,
                'name' => 'body',
                'summary' => NULL,
                'status' => 'Inactive',


            ),
            3 =>
            array (
                'id' => 31,
                'vendor_id' => NULL,
            'name' => 'Body(Sneakers)',
                'summary' => 'This is the attribute group that contains body attributes of  sneakers',
                'status' => 'Inactive',


            ),
            4 =>
            array (
                'id' => 32,
                'vendor_id' => 1,
                'name' => 'Laptop_Attributes',
                'summary' => 'This is the attribute group that contains body attributes of  laptops',
                'status' => 'Active',


            ),
            5 =>
            array (
                'id' => 33,
                'vendor_id' => 1,
                'name' => 'Cameras_Attributes',
                'summary' => 'This is the attribute group that contains body attributes of cameras',
                'status' => 'Active',


            ),
        ));


    }
}
