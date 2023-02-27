<?php

namespace Modules\GeoLocale\Database\Seeders;

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
            'id' => 49,
            'label' => 'Geo Locale',
            'link' => 'geolocale',
            'params' => '{"permission":"Modules\\\\GeoLocale\\\\Http\\\\Controllers\\\\GeoLocaleController@index", "route_name":["geolocale.index"], "menu_lavel":"1"}',
            'is_default' => 1,
            'icon' => NULL,
            'parent' => 31,
            'sort' => 58,
            'class' => NULL,
            'menu' => 1,
            'depth' => 1,
            'is_custom_menu' => 0,
        ),
        ], 'id');

    }
}
