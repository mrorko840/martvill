<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('blog_categories')->delete();

        \DB::table('blog_categories')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Uncategorized',
                'status' => 'Active',
            ),
            1 =>
            array(
                'id' => 3,
                'name' => 'Travel',
                'status' => 'Active',
            ),
            2 =>
            array(
                'id' => 4,
                'name' => 'Technology',
                'status' => 'Active',
            ),
            3 =>
            array(
                'id' => 5,
                'name' => 'Beauty',
                'status' => 'Active',
            ),
            4 =>
            array(
                'id' => 6,
                'name' => 'Health',
                'status' => 'Active',
            ),
            5 =>
            array(
                'id' => 7,
                'name' => 'Fashion',
                'status' => 'Active',
            ),
            6 =>
            array(
                'id' => 8,
                'name' => 'Food',
                'status' => 'Active',
            ),
            7 =>
            array(
                'id' => 9,
                'name' => 'Grocery',
                'status' => 'Active',
            ),
            8 =>
            array(
                'id' => 10,
                'name' => 'Lifestyle',
                'status' => 'Active',
            ),
            9 =>
            array(
                'id' => 11,
                'name' => 'Interior design',
                'status' => 'Active',
            ),
            10 =>
            array(
                'id' => 12,
                'name' => 'Digital product',
                'status' => 'Active',
            ),
        ));
        
    }
}