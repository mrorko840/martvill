<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableWithoutDummyDataSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Uncategorized',
                'slug' => 'uncategorized',
                'parent_id' => NULL,
                'order_by' => 1,
                'is_searchable' => 1,
                'is_featured' => 0,
                'product_counts' => 0,
                'sell_commissions' => NULL,
                'status' => 'Active',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Category 1',
                'slug' => 'category-1',
                'parent_id' => NULL,
                'order_by' => 1,
                'is_searchable' => 1,
                'is_featured' => 0,
                'product_counts' => 0,
                'sell_commissions' => NULL,
                'status' => 'Active',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Category 2',
                'slug' => 'category-2',
                'parent_id' => NULL,
                'order_by' => 1,
                'is_searchable' => 1,
                'is_featured' => 0,
                'product_counts' => 0,
                'sell_commissions' => NULL,
                'status' => 'Active',
            )
        ));
    }
}