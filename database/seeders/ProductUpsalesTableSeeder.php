<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductUpsalesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_upsales')->delete();
        
        
        
    }
}