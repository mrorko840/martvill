<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderStatusHistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_status_histories')->delete();
        
        \DB::table('order_status_histories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => NULL,
                'order_id' => 1,
                'user_id' => NULL,
                'order_status_id' => 1,
                'note' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1205,
                'order_id' => 1,
                'user_id' => 1,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 1203,
                'order_id' => 1,
                'user_id' => 15,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 1204,
                'order_id' => 1,
                'user_id' => 15,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => NULL,
                'order_id' => 1,
                'user_id' => NULL,
                'order_status_id' => 4,
                'note' => 'System Generated',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => NULL,
                'order_id' => 2,
                'user_id' => NULL,
                'order_status_id' => 1,
                'note' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 1199,
                'order_id' => 2,
                'user_id' => 18,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => NULL,
                'order_id' => 2,
                'user_id' => NULL,
                'order_status_id' => 4,
                'note' => 'System Generated',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => NULL,
                'order_id' => 3,
                'user_id' => NULL,
                'order_status_id' => 1,
                'note' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => NULL,
                'order_id' => 4,
                'user_id' => NULL,
                'order_status_id' => 1,
                'note' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => NULL,
                'order_id' => 5,
                'user_id' => NULL,
                'order_status_id' => 1,
                'note' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 1275,
                'order_id' => 5,
                'user_id' => 1,
                'order_status_id' => 5,
                'note' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 1275,
                'order_id' => 5,
                'user_id' => 1,
                'order_status_id' => 5,
                'note' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => NULL,
                'order_id' => 6,
                'user_id' => NULL,
                'order_status_id' => 1,
                'note' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => NULL,
                'order_id' => 7,
                'user_id' => NULL,
                'order_status_id' => 1,
                'note' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 1151,
                'order_id' => 7,
                'user_id' => 18,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 1200,
                'order_id' => 7,
                'user_id' => 15,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 1183,
                'order_id' => 7,
                'user_id' => 1,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => NULL,
                'order_id' => 7,
                'user_id' => NULL,
                'order_status_id' => 4,
                'note' => 'System Generated',
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => NULL,
                'order_id' => 8,
                'user_id' => NULL,
                'order_status_id' => 1,
                'note' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 1244,
                'order_id' => 8,
                'user_id' => 1,
                'order_status_id' => 6,
                'note' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 1137,
                'order_id' => 8,
                'user_id' => 1,
                'order_status_id' => 6,
                'note' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 1244,
                'order_id' => 8,
                'user_id' => 1,
                'order_status_id' => 6,
                'note' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => 1137,
                'order_id' => 8,
                'user_id' => 1,
                'order_status_id' => 6,
                'note' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => NULL,
                'order_id' => 9,
                'user_id' => NULL,
                'order_status_id' => 1,
                'note' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'product_id' => NULL,
                'order_id' => 10,
                'user_id' => NULL,
                'order_status_id' => 1,
                'note' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'product_id' => 1183,
                'order_id' => 10,
                'user_id' => 1,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'product_id' => 1176,
                'order_id' => 10,
                'user_id' => 1,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'product_id' => 1202,
                'order_id' => 10,
                'user_id' => 1,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'product_id' => NULL,
                'order_id' => 10,
                'user_id' => NULL,
                'order_status_id' => 4,
                'note' => 'System Generated',
            ),
            30 => 
            array (
                'id' => 31,
                'product_id' => NULL,
                'order_id' => 11,
                'user_id' => NULL,
                'order_status_id' => 1,
                'note' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'product_id' => NULL,
                'order_id' => 12,
                'user_id' => NULL,
                'order_status_id' => 1,
                'note' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'product_id' => NULL,
                'order_id' => 13,
                'user_id' => NULL,
                'order_status_id' => 1,
                'note' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'product_id' => NULL,
                'order_id' => 14,
                'user_id' => NULL,
                'order_status_id' => 1,
                'note' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'product_id' => 1200,
                'order_id' => 11,
                'user_id' => 1,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'product_id' => 1177,
                'order_id' => 11,
                'user_id' => 1,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'product_id' => 1157,
                'order_id' => 11,
                'user_id' => 1,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'product_id' => 1183,
                'order_id' => 12,
                'user_id' => 1,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'product_id' => 1313,
                'order_id' => 12,
                'user_id' => 1,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'product_id' => 1308,
                'order_id' => 12,
                'user_id' => 1,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'product_id' => 1305,
                'order_id' => 12,
                'user_id' => 1,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'product_id' => 1151,
                'order_id' => 12,
                'user_id' => 1,
                'order_status_id' => 4,
                'note' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'product_id' => 1137,
                'order_id' => 13,
                'user_id' => 1,
                'order_status_id' => 4,
                'note' => NULL,
            ),
        ));
        
        
    }
}