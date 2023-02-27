<?php

namespace Modules\Shop\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
       DB::table('menu_items')->upsert([
            array (
                'id' => 17,
                'label' => 'shop',
                'link' => 'shop',
                'params' => '{"permission":"Modules\\\\Shop\\\\Http\\\\Controllers\\\\ShopController@index","route_name":["shop.index","shop.create","shop.edit","shop.pdf","shop.csv","shopPdf.pdf","shopCsv.csv"]}',
                'is_default' => 1,
                'icon' => 'fas fa-archive',
                'parent' => 30,
                'sort' => 21,
                'class' => NULL,
                'menu' => 1,
                'depth' => 1,
            ),
            array (
                'id' => 50,
                'label' => 'Shop',
                'link' => 'shop',
                'params' => '{"permission":"Modules\\\\Shop\\\\Http\\\\Controllers\\\\Vendor\\\\ShopController@index","route_name":["vendor.shop.index", "vendor.shop.create", "vendor.shop.edit"]}',
                'is_default' => 1,
                'icon' => 'fas fa-archive',
                'parent' => 0,
                'sort' => 5,
                'class' => NULL,
                'menu' => 3,
                'depth' => 0,
            ),
        ], 'id');

    }
}
