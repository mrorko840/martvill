<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandStatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brand_stats')->delete();
        
        \DB::table('brand_stats')->insert(array (
            0 => 
            array (
                'id' => 1,
                'brand_id' => 29,
                'count_views' => 0,
                'count_sales' => 4,
                'date' => randomDateBefore(5),
            ),
            1 => 
            array (
                'id' => 2,
                'brand_id' => 50,
                'count_views' => 0,
                'count_sales' => 1,
                'date' => randomDateBefore(5),
            ),
            2 => 
            array (
                'id' => 3,
                'brand_id' => 4,
                'count_views' => 0,
                'count_sales' => 1,
                'date' => randomDateBefore(5),
            ),
            3 => 
            array (
                'id' => 4,
                'brand_id' => 18,
                'count_views' => 0,
                'count_sales' => 2,
                'date' => randomDateBefore(5),
            ),
            4 => 
            array (
                'id' => 5,
                'brand_id' => 35,
                'count_views' => 0,
                'count_sales' => 1,
                'date' => randomDateBefore(5),
            ),
            5 => 
            array (
                'id' => 6,
                'brand_id' => 16,
                'count_views' => 0,
                'count_sales' => 4,
                'date' => randomDateBefore(5),
            ),
            6 => 
            array (
                'id' => 7,
                'brand_id' => 14,
                'count_views' => 0,
                'count_sales' => 1,
                'date' => randomDateBefore(5),
            ),
            7 => 
            array (
                'id' => 9,
                'brand_id' => 2,
                'count_views' => 0,
                'count_sales' => 4,
                'date' => randomDateBefore(5),
            ),
            8 => 
            array (
                'id' => 11,
                'brand_id' => 21,
                'count_views' => 0,
                'count_sales' => 2,
                'date' => randomDateBefore(5),
            ),
            9 => 
            array (
                'id' => 12,
                'brand_id' => 8,
                'count_views' => 0,
                'count_sales' => 2,
                'date' => randomDateBefore(5),
            ),
            10 => 
            array (
                'id' => 16,
                'brand_id' => 23,
                'count_views' => 0,
                'count_sales' => 1,
                'date' => randomDateBefore(5),
            ),
            11 => 
            array (
                'id' => 18,
                'brand_id' => 5,
                'count_views' => 0,
                'count_sales' => 2,
                'date' => randomDateBefore(5),
            ),
            12 => 
            array (
                'id' => 19,
                'brand_id' => 22,
                'count_views' => 0,
                'count_sales' => 1,
                'date' => randomDateBefore(5),
            ),
            13 => 
            array (
                'id' => 24,
                'brand_id' => 31,
                'count_views' => 0,
                'count_sales' => 1,
                'date' => randomDateBefore(5),
            ),
            14 => 
            array (
                'id' => 28,
                'brand_id' => 46,
                'count_views' => 0,
                'count_sales' => 1,
                'date' => randomDateBefore(5),
            ),
            15 => 
            array (
                'id' => 29,
                'brand_id' => 38,
                'count_views' => 0,
                'count_sales' => 1,
                'date' => randomDateBefore(5),
            ),
            16 => 
            array (
                'id' => 30,
                'brand_id' => 3,
                'count_views' => 0,
                'count_sales' => 1,
                'date' => randomDateBefore(5),
            ),
        ));
        
        
    }
}