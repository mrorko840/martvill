<?php

namespace Modules\Shop\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
       DB::table('admin_menus')->upsert([
            array (
                'name' => 'shop',
                'url' => 'shop',
                'slug' => 'shop',
                'permission' => '{"permission":"Modules\\\\Shop\\\\Http\\\\Controllers\\\\ShopController@index","route_name":["shop.index","shop.create","shop.edit","shop.pdf","shop.csv","shopPdf.pdf","shopCsv.csv"], "menu_level":"1"}',
                'is_default' => 1,
            ),
        ], 'slug');

    }
}
