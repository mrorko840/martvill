<?php

namespace Modules\CMS\Database\Seeders;

use Illuminate\Database\Seeder;

class ComponentPropertiesTableWithoutDummyDataSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('component_properties')->delete();

        \DB::table('component_properties')->insert(array (
            0 =>
            array (
                'id' => 4,
                'component_id' => 2,
                'name' => 'title',
                'type' => 'string',
                'value' => 'Top Categories Of the Month',
            ),
            1 =>
            array (
                'id' => 5,
                'component_id' => 2,
                'name' => 'category_type',
                'type' => 'string',
                'value' => 'selectedCategories',
            ),
            2 =>
            array (
                'id' => 6,
                'component_id' => 2,
                'name' => 'categories',
                'type' => 'array',
                'value' => '["38","39","41","42","46","47","49"]',
            ),
            3 =>
            array (
                'id' => 7,
                'component_id' => 3,
                'name' => 'title',
                'type' => 'string',
                'value' => 'BEST DEALS OF THE WEEK',
            ),
            4 =>
            array (
                'id' => 8,
                'component_id' => 3,
                'name' => 'see_more',
                'type' => 'string',
                'value' => '0',
            ),
            5 =>
            array (
                'id' => 9,
                'component_id' => 3,
                'name' => 'more_link',
                'type' => 'string',
                'value' => '',
            ),
            6 =>
            array (
                'id' => 10,
                'component_id' => 3,
                'name' => 'sidebar',
                'type' => 'string',
                'value' => 'slide',
            ),
            7 =>
            array (
                'id' => 11,
                'component_id' => 3,
                'name' => 'sidebar_position',
                'type' => 'string',
                'value' => 'left',
            ),
            8 =>
            array (
                'id' => 12,
                'component_id' => 3,
                'name' => 'showcase_type',
                'type' => 'string',
                'value' => 'newArrivals',
            ),
            9 =>
            array (
                'id' => 13,
                'component_id' => 3,
                'name' => 'total_products',
                'type' => 'string',
                'value' => '8',
            ),
            10 =>
            array (
                'id' => 14,
                'component_id' => 3,
                'name' => 'slide',
                'type' => 'array',
                'value' => '{"u_subtitle":"LIVING & LIFESTYLE","l_subtitle":"DECORATE","title":"YOUR HOME","image":"20221123/b05bc24c3a122d465099a05a24d2fa3b.png","button":"SHOW NOW","link":"http:\\/\\/google.com"}',
            ),
            11 =>
            array (
                'id' => 15,
                'component_id' => 3,
                'name' => 'slider',
                'type' => 'array',
                'value' => '[{"u_subtitle":"","l_subtitle":"","title":"","button_text":"","button_link":""}]',
            ),
            12 =>
            array (
                'id' => 16,
                'component_id' => 3,
                'name' => 'flash',
                'type' => 'array',
                'value' => '{"badge_text":""}',
            ),
            13 =>
            array (
                'id' => 30,
                'component_id' => 4,
                'name' => 'title',
                'type' => 'string',
                'value' => 'Flash Sale',
            ),
            14 =>
            array (
                'id' => 31,
                'component_id' => 4,
                'name' => 'see_more',
                'type' => 'string',
                'value' => '1',
            ),
            15 =>
            array (
                'id' => 32,
                'component_id' => 4,
                'name' => 'more_link',
                'type' => 'string',
                'value' => '#',
            ),
            16 =>
            array (
                'id' => 33,
                'component_id' => 4,
                'name' => 'sidebar',
                'type' => 'string',
                'value' => 'flash_sale',
            ),
            17 =>
            array (
                'id' => 34,
                'component_id' => 4,
                'name' => 'sidebar_position',
                'type' => 'string',
                'value' => 'left',
            ),
            18 =>
            array (
                'id' => 35,
                'component_id' => 4,
                'name' => 'showcase_type',
                'type' => 'string',
                'value' => 'newArrivals',
            ),
            19 =>
            array (
                'id' => 36,
                'component_id' => 4,
                'name' => 'total_products',
                'type' => 'string',
                'value' => '9',
            ),
            20 =>
            array (
                'id' => 37,
                'component_id' => 4,
                'name' => 'slide',
                'type' => 'array',
                'value' => '{"u_subtitle":"","l_subtitle":"","title":"","button":"","link":""}',
            ),
            21 =>
            array (
                'id' => 38,
                'component_id' => 4,
                'name' => 'slider',
                'type' => 'array',
                'value' => '[{"u_subtitle":"","l_subtitle":"","title":"","button_text":"","button_link":""}]',
            ),
            22 =>
            array (
                'id' => 39,
                'component_id' => 4,
                'name' => 'flash',
                'type' => 'array',
                'value' => '{"badge_text":"Deal Of The Day"}',
            ),
            23 =>
            array (
                'id' => 56,
                'component_id' => 6,
                'name' => 'upper_st',
                'type' => 'string',
                'value' => 'NEW ARRIVALS',
            ),
            24 =>
            array (
                'id' => 57,
                'component_id' => 6,
                'name' => 'lower_st',
                'type' => 'string',
                'value' => 'Starting from $9.99',
            ),
            25 =>
            array (
                'id' => 58,
                'component_id' => 6,
                'name' => 'title',
                'type' => 'string',
                'value' => 'JEANS COLLECTION',
            ),
            26 =>
            array (
                'id' => 59,
                'component_id' => 6,
                'name' => 'btn_text',
                'type' => 'string',
                'value' => 'Shop Now',
            ),
            27 =>
            array (
                'id' => 60,
                'component_id' => 6,
                'name' => 'btn_link',
                'type' => 'string',
                'value' => '#',
            ),
            28 =>
            array (
                'id' => 61,
                'component_id' => 6,
                'name' => 'image',
                'type' => 'string',
                'value' => '20220831\\4aa551e593f7e3c1c0bb63b626738eb2.png',
            ),
            29 =>
            array (
                'id' => 70,
                'component_id' => 15,
                'name' => 'cta',
                'type' => 'array',
                'value' => '[{"upper_st":"ELECTRONICS","lower_st":"ELECTROFY","title":"YOUR LIFW","image":"20220831/ad58f57577ee2331b94298ef8301a918.png","btn_text":"SHOP NOW","btn_link":"#"},{"upper_st":"SHOES","lower_st":"ADD STYLES TO","title":"YOUR FEET","image":"20220831/138b95f17cd98bb837051dfbe54bf64d.png","btn_text":"SHOP NOW","btn_link":"#"}]',
            ),
            30 =>
            array (
                'id' => 74,
                'component_id' => 16,
                'name' => 'title',
                'type' => 'string',
                'value' => 'Popular Departments',
            ),
            31 =>
            array (
                'id' => 75,
                'component_id' => 16,
                'name' => 'disp_categories',
                'type' => 'array',
                'value' => '["newArrivals","popularProducts","featureProducts","flashSales"]',
            ),
            32 =>
            array (
                'id' => 76,
                'component_id' => 16,
                'name' => 'max',
                'type' => 'string',
                'value' => '15',
            ),
            33 =>
            array (
                'id' => 80,
                'component_id' => 17,
                'name' => 'title',
                'type' => 'string',
                'value' => 'SPORTS ZONE',
            ),
            34 =>
            array (
                'id' => 81,
                'component_id' => 17,
                'name' => 'see_more',
                'type' => 'string',
                'value' => '1',
            ),
            35 =>
            array (
                'id' => 82,
                'component_id' => 17,
                'name' => 'more_link',
                'type' => 'string',
                'value' => '#',
            ),
            36 =>
            array (
                'id' => 83,
                'component_id' => 17,
                'name' => 'sidebar',
                'type' => 'string',
                'value' => 'slider',
            ),
            37 =>
            array (
                'id' => 84,
                'component_id' => 17,
                'name' => 'sidebar_position',
                'type' => 'string',
                'value' => 'left',
            ),
            38 =>
            array (
                'id' => 85,
                'component_id' => 17,
                'name' => 'showcase_type',
                'type' => 'string',
                'value' => 'newArrivals',
            ),
            39 =>
            array (
                'id' => 86,
                'component_id' => 17,
                'name' => 'total_products',
                'type' => 'string',
                'value' => '8',
            ),
            40 =>
            array (
                'id' => 87,
                'component_id' => 17,
                'name' => 'slide',
                'type' => 'array',
                'value' => '{"u_subtitle":"","l_subtitle":"","title":"","button":"","link":""}',
            ),
            41 =>
            array (
                'id' => 88,
                'component_id' => 17,
                'name' => 'slider',
                'type' => 'array',
                'value' => '[{"u_subtitle":"SPORTS","l_subtitle":"SAFEGUARD YOUR","title":"ADVENTURES","image":"20221123/8aef5c1a8f0cb9c5f4dbf783ee501d47.png","button_text":"Shop Now","button_link":"#"},{"u_subtitle":"SPORTS","l_subtitle":"SAFEGUARD YOUR","title":"ADVENTURES","image":"20221123/11c41cfbe3e9f892e149b7715a0d9200.png","button_text":"Shop Now","button_link":"#"}]',
            ),
            42 =>
            array (
                'id' => 89,
                'component_id' => 17,
                'name' => 'flash',
                'type' => 'array',
                'value' => '{"badge_text":""}',
            ),
            43 =>
            array (
                'id' => 100,
                'component_id' => 18,
                'name' => 'title',
                'type' => 'string',
                'value' => 'TOP BRANDS',
            ),
            44 =>
            array (
                'id' => 101,
                'component_id' => 18,
                'name' => 'brand_type',
                'type' => 'string',
                'value' => 'bestSeller',
            ),
            45 =>
            array (
                'id' => 102,
                'component_id' => 18,
                'name' => 'brand_limit',
                'type' => 'string',
                'value' => '9',
            ),
            46 =>
            array (
                'id' => 103,
                'component_id' => 19,
                'name' => 'sidebox',
                'type' => 'array',
                'value' => '{"title":"New Here?","sidetext":"Get Coupon","description":"Use coupon <span class=\\"primary-text-color font-medium\\">\\u2018BUYNOW01\\u2019<\\/span> and get up to $200 on your first purchase."}',
            ),
            47 =>
            array (
                'id' => 105,
                'component_id' => 19,
                'name' => 'sidebox_show',
                'type' => 'string',
                'value' => '1',
            ),
            48 =>
            array (
                'id' => 106,
                'component_id' => 19,
                'name' => 'iconbox',
                'type' => 'array',
                'value' => '[{"image":"20220912/80a6e899c44b684664e32cbc47082f60.png","title":"Free Shipping Worldwide","subtitle":"For all orders over $350"},{"image":"20220912/7fb4c55cfbf6fbaebeb7f3fcde4536c0.png","title":"Secured Online Payment","subtitle":"Payment protection guaranteed"},{"image":"20220912/857c4980e5995df0ff3cbddab4a76ef0.png","title":"Money Back Guarantee","subtitle":"If goods have problems"}]',
            ),
            49 =>
            array (
                'id' => 113,
                'component_id' => 3,
                'name' => 'row',
                'type' => 'string',
                'value' => '2',
            ),
            50 =>
            array (
                'id' => 114,
                'component_id' => 3,
                'name' => 'column',
                'type' => 'string',
                'value' => '4',
            ),
            51 =>
            array (
                'id' => 125,
                'component_id' => 4,
                'name' => 'row',
                'type' => 'string',
                'value' => '2',
            ),
            52 =>
            array (
                'id' => 126,
                'component_id' => 4,
                'name' => 'column',
                'type' => 'string',
                'value' => '4',
            ),
            53 =>
            array (
                'id' => 144,
                'component_id' => 16,
                'name' => 'row',
                'type' => 'string',
                'value' => '3',
            ),
            54 =>
            array (
                'id' => 145,
                'component_id' => 16,
                'name' => 'column',
                'type' => 'string',
                'value' => '5',
            ),
            55 =>
            array (
                'id' => 149,
                'component_id' => 17,
                'name' => 'row',
                'type' => 'string',
                'value' => '2',
            ),
            56 =>
            array (
                'id' => 150,
                'component_id' => 17,
                'name' => 'column',
                'type' => 'string',
                'value' => '4',
            ),
            9 =>
            array (
                'id' => 1482,
                'component_id' => 3,
                'name' => 'mt',
                'type' => 'string',
                'value' => '',
            ),
            10 =>
            array (
                'id' => 1483,
                'component_id' => 3,
                'name' => 'mb',
                'type' => 'string',
                'value' => '',
            ),
            11 =>
            array (
                'id' => 1484,
                'component_id' => 3,
                'name' => 'card_height',
                'type' => 'string',
                'value' => '241',
            ),
            12 =>
            array (
                'id' => 1497,
                'component_id' => 17,
                'name' => 'mt',
                'type' => 'string',
                'value' => '',
            ),
            13 =>
            array (
                'id' => 1498,
                'component_id' => 17,
                'name' => 'mb',
                'type' => 'string',
                'value' => '',
            ),
            14 =>
            array (
                'id' => 1499,
                'component_id' => 17,
                'name' => 'card_height',
                'type' => 'string',
                'value' => '242',
            ),
            33 =>
            array (
                'id' => 1740,
                'component_id' => 2,
                'name' => 'row',
                'type' => 'string',
                'value' => '1',
            ),
            34 =>
            array (
                'id' => 1741,
                'component_id' => 2,
                'name' => 'column',
                'type' => 'string',
                'value' => '7',
            ),
            35 =>
            array (
                'id' => 1742,
                'component_id' => 2,
                'name' => 'max',
                'type' => 'string',
                'value' => '7',
            ),
            36 =>
            array (
                'id' => 1743,
                'component_id' => 2,
                'name' => 'full',
                'type' => 'string',
                'value' => '0',
            ),
            37 =>
            array (
                'id' => 1744,
                'component_id' => 2,
                'name' => 'mt',
                'type' => 'string',
                'value' => '',
            ),
            38 =>
            array (
                'id' => 1745,
                'component_id' => 2,
                'name' => 'mb',
                'type' => 'string',
                'value' => '',
            ),
            39 =>
            array (
                'id' => 1782,
                'component_id' => 4,
                'name' => 'mt',
                'type' => 'string',
                'value' => '',
            ),
            40 =>
            array (
                'id' => 1783,
                'component_id' => 4,
                'name' => 'mb',
                'type' => 'string',
                'value' => '',
            ),
            41 =>
            array (
                'id' => 1784,
                'component_id' => 4,
                'name' => 'card_height',
                'type' => 'string',
                'value' => '171',
            ),
            42 =>
            array (
                'id' => 1797,
                'component_id' => 16,
                'name' => 'mt',
                'type' => 'string',
                'value' => '',
            ),
            43 =>
            array (
                'id' => 1798,
                'component_id' => 16,
                'name' => 'mb',
                'type' => 'string',
                'value' => '',
            ),
            44 =>
            array (
                'id' => 1799,
                'component_id' => 16,
                'name' => 'card_height',
                'type' => 'string',
                'value' => '',
            )
        ));
    }
}
