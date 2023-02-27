<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Samsung',
                'vendor_id' => 1,
                'product_counts' => 2,
                'status' => 'Active',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tab',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Galaxy',
                'vendor_id' => 1,
                'product_counts' => 2,
                'status' => 'Active',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Samsung Galaxy Tab',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Smart Phone',
                'vendor_id' => 1,
                'product_counts' => 4,
                'status' => 'Active',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'iPhone',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => ' 13 Pro',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => ' iPhone 13 Pro',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'A30',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Nokia',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Nokia 3.4 DS',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Laptop',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Laptop PC touch',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'HP ENVY 17t-ch000',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'HP Laptop',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'LED TV',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => ' MI 43 Inch P1 4K UHD android LED TV',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'MI 43 Inch',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'MI',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'MI P1',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            20 => 
            array (
                'id' => 21,
            'name' => 'WFC-3F5-GDEL-XX (Inverter)',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Inverter',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'WFC',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Waxjambu GL710H',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Waxjambu',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'GL710H',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'WPL02-C1',
                'vendor_id' => 1,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'power bank',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'mobile',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'accessory',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'men',
                'vendor_id' => NULL,
                'product_counts' => 2,
                'status' => 'Active',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'wallet',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'fashion',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'girls',
                'vendor_id' => NULL,
                'product_counts' => 2,
                'status' => 'Active',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'women',
                'vendor_id' => NULL,
                'product_counts' => 2,
                'status' => 'Active',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'ear',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'ear rings',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'watch',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'girl',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            39 => 
            array (
                'id' => 41,
                'name' => 'toy',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            40 => 
            array (
                'id' => 42,
                'name' => 'boys',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            41 => 
            array (
                'id' => 43,
                'name' => 'children',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            42 => 
            array (
                'id' => 44,
                'name' => 'adult',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            43 => 
            array (
                'id' => 45,
                'name' => 'anti-stress',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            44 => 
            array (
                'id' => 46,
                'name' => 'headphone',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            45 => 
            array (
                'id' => 47,
                'name' => 'bluetooth',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            46 => 
            array (
                'id' => 48,
                'name' => 'bag',
                'vendor_id' => NULL,
                'product_counts' => 6,
                'status' => 'Active',
            ),
            47 => 
            array (
                'id' => 49,
                'name' => 'bagpack',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            48 => 
            array (
                'id' => 50,
                'name' => 'smart',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            49 => 
            array (
                'id' => 51,
                'name' => 'Electronic device',
                'vendor_id' => NULL,
                'product_counts' => 4,
                'status' => 'Active',
            ),
            50 => 
            array (
                'id' => 52,
                'name' => 'Television',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            51 => 
            array (
                'id' => 53,
                'name' => 'white fachion',
                'vendor_id' => NULL,
                'product_counts' => 11,
                'status' => 'Active',
            ),
            52 => 
            array (
                'id' => 54,
                'name' => 'white fachion full',
                'vendor_id' => NULL,
                'product_counts' => 5,
                'status' => 'Active',
            ),
            53 => 
            array (
                'id' => 55,
                'name' => 'Furniture',
                'vendor_id' => NULL,
                'product_counts' => 6,
                'status' => 'Active',
            ),
            54 => 
            array (
                'id' => 56,
                'name' => 'Woman Dress',
                'vendor_id' => NULL,
                'product_counts' => 4,
                'status' => 'Active',
            ),
            55 => 
            array (
                'id' => 57,
                'name' => 'Woman Fashion',
                'vendor_id' => NULL,
                'product_counts' => 3,
                'status' => 'Active',
            ),
            56 => 
            array (
                'id' => 58,
                'name' => 'School bag',
                'vendor_id' => NULL,
                'product_counts' => 2,
                'status' => 'Active',
            ),
            57 => 
            array (
                'id' => 59,
                'name' => 'Pad',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            58 => 
            array (
                'id' => 60,
                'name' => 'Sanitary Pad',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            59 => 
            array (
                'id' => 61,
                'name' => 'Napkin',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            60 => 
            array (
                'id' => 62,
                'name' => 'Travel Bag',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            61 => 
            array (
                'id' => 63,
                'name' => 'Book',
                'vendor_id' => NULL,
                'product_counts' => 2,
                'status' => 'Active',
            ),
            62 => 
            array (
                'id' => 64,
                'name' => 'Card',
                'vendor_id' => NULL,
                'product_counts' => 2,
                'status' => 'Active',
            ),
            63 => 
            array (
                'id' => 65,
                'name' => 'Wireless',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            64 => 
            array (
                'id' => 66,
                'name' => 'Shirts',
                'vendor_id' => NULL,
                'product_counts' => 2,
                'status' => 'Active',
            ),
            65 => 
            array (
                'id' => 67,
                'name' => 'Kids',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            66 => 
            array (
                'id' => 68,
                'name' => 'T-shirt',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            67 => 
            array (
                'id' => 69,
                'name' => 'digital product',
                'vendor_id' => NULL,
                'product_counts' => 6,
                'status' => 'Active',
            ),
            68 => 
            array (
                'id' => 70,
                'name' => 'digital product feature',
                'vendor_id' => NULL,
                'product_counts' => 2,
                'status' => 'Active',
            ),
            69 => 
            array (
                'id' => 71,
                'name' => 'New Fashion',
                'vendor_id' => NULL,
                'product_counts' => 8,
                'status' => 'Active',
            ),
            70 => 
            array (
                'id' => 73,
                'name' => 'Electronics',
                'vendor_id' => NULL,
                'product_counts' => 8,
                'status' => 'Active',
            ),
            71 => 
            array (
                'id' => 74,
                'name' => 'group product',
                'vendor_id' => NULL,
                'product_counts' => 2,
                'status' => 'Active',
            ),
            72 => 
            array (
                'id' => 75,
                'name' => 'combo product',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
            73 => 
            array (
                'id' => 77,
                'name' => 'women\'s',
                'vendor_id' => NULL,
                'product_counts' => 1,
                'status' => 'Active',
            ),
        ));
        
        
    }
}