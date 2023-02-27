<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VendorsMetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vendors_meta')->delete();
        
        \DB::table('vendors_meta')->insert(array (
            0 => 
            array (
                'id' => 1,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 1,
                'type' => 'string',
                'key' => 'description',
                'value' => 'Welcome to Online Gizmo Tizmo Bangladesh.Buy Game Currency,In-Game Recharge,Digital Goods at cheap rate in Bangladesh from OGSBD.',
            ),
            1 => 
            array (
                'id' => 2,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 1,
                'type' => 'string',
                'key' => 'cover_photo',
                'value' => '733',
            ),
            2 => 
            array (
                'id' => 3,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 1,
                'type' => 'string',
                'key' => 'vendor_logo',
                'value' => '732',
            ),
            3 => 
            array (
                'id' => 4,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 2,
                'type' => 'string',
                'key' => 'description',
                'value' => 'Unique Joopies Posters designed and sold by artists. Shop affordable wall art to hang in dorms, bedrooms, offices, or anywhere blank walls aren\'t welcome.',
            ),
            4 => 
            array (
                'id' => 5,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 2,
                'type' => 'string',
                'key' => 'cover_photo',
                'value' => '734',
            ),
            5 => 
            array (
                'id' => 6,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 2,
                'type' => 'string',
                'key' => 'vendor_logo',
                'value' => '735',
            ),
            6 => 
            array (
                'id' => 7,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 16,
                'type' => 'string',
                'key' => 'description',
                'value' => 'A retail shop that sells furniture and furniture related products. The town had an affordable, accessible furniture which the local population supported.',
            ),
            7 => 
            array (
                'id' => 8,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 16,
                'type' => 'string',
                'key' => 'cover_photo',
                'value' => '739',
            ),
            8 => 
            array (
                'id' => 9,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 16,
                'type' => 'string',
                'key' => 'vendor_logo',
                'value' => '738',
            ),
            9 => 
            array (
                'id' => 10,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 17,
                'type' => 'string',
                'key' => 'description',
                'value' => 'Holistic Store is a leading holistic and spiritual online shop selling a range of products for personal development and spiritual insight.',
            ),
            10 => 
            array (
                'id' => 11,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 17,
                'type' => 'string',
                'key' => 'cover_photo',
                'value' => '741',
            ),
            11 => 
            array (
                'id' => 12,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 17,
                'type' => 'string',
                'key' => 'vendor_logo',
                'value' => '740',
            ),
            12 => 
            array (
                'id' => 13,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 18,
                'type' => 'string',
                'key' => 'description',
                'value' => 'Largest online home decor shop in bangladesh. Buy home decor products in bangladesh at best prices and pay cash on delivery in dhaka.',
            ),
            13 => 
            array (
                'id' => 14,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 18,
                'type' => 'string',
                'key' => 'cover_photo',
                'value' => '743',
            ),
            14 => 
            array (
                'id' => 15,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 18,
                'type' => 'string',
                'key' => 'vendor_logo',
                'value' => '742',
            ),
            15 => 
            array (
                'id' => 16,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 19,
                'type' => 'string',
                'key' => 'description',
                'value' => 'Lifestyle is a brand that always tries to satisfy the customers with quality and innovative products. Our aim is to be your trusted clothing partner and want to make a trustworthy environment.',
            ),
            16 => 
            array (
                'id' => 17,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 19,
                'type' => 'string',
                'key' => 'cover_photo',
                'value' => '745',
            ),
            17 => 
            array (
                'id' => 18,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 19,
                'type' => 'string',
                'key' => 'vendor_logo',
                'value' => '744',
            ),
            18 => 
            array (
                'id' => 19,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 20,
                'type' => 'string',
                'key' => 'description',
                'value' => 'Sportsuchtig will sell the latest and most popular name-brand sporting goods, apparel, and accessories.',
            ),
            19 => 
            array (
                'id' => 20,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 20,
                'type' => 'string',
                'key' => 'cover_photo',
                'value' => '747',
            ),
            20 => 
            array (
                'id' => 21,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 20,
                'type' => 'string',
                'key' => 'vendor_logo',
                'value' => '746',
            ),
            21 => 
            array (
                'id' => 22,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 21,
                'type' => 'NULL',
                'key' => 'description',
                'value' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 21,
                'type' => 'NULL',
                'key' => 'cover_photo',
                'value' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 21,
                'type' => 'string',
                'key' => 'vendor_logo',
                'value' => '801',
            ),
            24 => 
            array (
                'id' => 25,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 25,
                'type' => 'NULL',
                'key' => 'description',
                'value' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 25,
                'type' => 'NULL',
                'key' => 'cover_photo',
                'value' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 25,
                'type' => 'string',
                'key' => 'vendor_logo',
                'value' => '801',
            ),
            27 => 
            array (
                'id' => 28,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 24,
                'type' => 'NULL',
                'key' => 'description',
                'value' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 24,
                'type' => 'NULL',
                'key' => 'cover_photo',
                'value' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 24,
                'type' => 'string',
                'key' => 'vendor_logo',
                'value' => '801',
            ),
            30 => 
            array (
                'id' => 31,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 23,
                'type' => 'NULL',
                'key' => 'description',
                'value' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 23,
                'type' => 'NULL',
                'key' => 'cover_photo',
                'value' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 23,
                'type' => 'string',
                'key' => 'vendor_logo',
                'value' => '801',
            ),
            33 => 
            array (
                'id' => 34,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 22,
                'type' => 'NULL',
                'key' => 'description',
                'value' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 22,
                'type' => 'NULL',
                'key' => 'cover_photo',
                'value' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'owner_type' => 'App\\Models\\Vendor',
                'owner_id' => 22,
                'type' => 'string',
                'key' => 'vendor_logo',
                'value' => '801',
            ),
        ));
        
        
    }
}