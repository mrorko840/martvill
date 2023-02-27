<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderCommissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_commissions')->delete();
        
        \DB::table('order_commissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'order_details_id' => 1,
                'vendor_id' => 16,
                'category_id' => 504,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            1 => 
            array (
                'id' => 2,
                'order_details_id' => 2,
                'vendor_id' => 16,
                'category_id' => 504,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            2 => 
            array (
                'id' => 3,
                'order_details_id' => 3,
                'vendor_id' => 16,
                'category_id' => 504,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            3 => 
            array (
                'id' => 4,
                'order_details_id' => 4,
                'vendor_id' => 19,
                'category_id' => 518,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            4 => 
            array (
                'id' => 5,
                'order_details_id' => 5,
                'vendor_id' => 1,
                'category_id' => NULL,
                'amount' => '3.00000000',
                'approval_time' => NULL,
                'status' => 'Pending',
            ),
            5 => 
            array (
                'id' => 6,
                'order_details_id' => 6,
                'vendor_id' => 19,
                'category_id' => NULL,
                'amount' => '3.00000000',
                'approval_time' => NULL,
                'status' => 'Pending',
            ),
            6 => 
            array (
                'id' => 7,
                'order_details_id' => 7,
                'vendor_id' => 19,
                'category_id' => NULL,
                'amount' => '3.00000000',
                'approval_time' => NULL,
                'status' => 'Pending',
            ),
            7 => 
            array (
                'id' => 8,
                'order_details_id' => 8,
                'vendor_id' => 16,
                'category_id' => 504,
                'amount' => '3.00000000',
                'approval_time' => NULL,
                'status' => 'Pending',
            ),
            8 => 
            array (
                'id' => 9,
                'order_details_id' => 9,
                'vendor_id' => 1,
                'category_id' => 39,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            9 => 
            array (
                'id' => 10,
                'order_details_id' => 10,
                'vendor_id' => 16,
                'category_id' => 504,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            10 => 
            array (
                'id' => 11,
                'order_details_id' => 11,
                'vendor_id' => 19,
                'category_id' => 512,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            11 => 
            array (
                'id' => 12,
                'order_details_id' => 12,
                'vendor_id' => 1,
                'category_id' => NULL,
                'amount' => '3.00000000',
                'approval_time' => NULL,
                'status' => 'Pending',
            ),
            12 => 
            array (
                'id' => 13,
                'order_details_id' => 13,
                'vendor_id' => 2,
                'category_id' => 526,
                'amount' => '3.00000000',
                'approval_time' => NULL,
                'status' => 'Pending',
            ),
            13 => 
            array (
                'id' => 14,
                'order_details_id' => 14,
                'vendor_id' => 19,
                'category_id' => NULL,
                'amount' => '3.00000000',
                'approval_time' => NULL,
                'status' => 'Pending',
            ),
            14 => 
            array (
                'id' => 15,
                'order_details_id' => 15,
                'vendor_id' => 19,
                'category_id' => NULL,
                'amount' => '3.00000000',
                'approval_time' => NULL,
                'status' => 'Pending',
            ),
            15 => 
            array (
                'id' => 16,
                'order_details_id' => 16,
                'vendor_id' => 1,
                'category_id' => NULL,
                'amount' => '3.00000000',
                'approval_time' => NULL,
                'status' => 'Pending',
            ),
            16 => 
            array (
                'id' => 17,
                'order_details_id' => 17,
                'vendor_id' => 17,
                'category_id' => NULL,
                'amount' => '3.00000000',
                'approval_time' => NULL,
                'status' => 'Pending',
            ),
            17 => 
            array (
                'id' => 18,
                'order_details_id' => 18,
                'vendor_id' => 1,
                'category_id' => 39,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            18 => 
            array (
                'id' => 19,
                'order_details_id' => 19,
                'vendor_id' => 1,
                'category_id' => 39,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            19 => 
            array (
                'id' => 20,
                'order_details_id' => 20,
                'vendor_id' => 16,
                'category_id' => 504,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            20 => 
            array (
                'id' => 21,
                'order_details_id' => 21,
                'vendor_id' => 16,
                'category_id' => 504,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            21 => 
            array (
                'id' => 22,
                'order_details_id' => 22,
                'vendor_id' => 1,
                'category_id' => 39,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            22 => 
            array (
                'id' => 23,
                'order_details_id' => 23,
                'vendor_id' => 1,
                'category_id' => 39,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            23 => 
            array (
                'id' => 24,
                'order_details_id' => 24,
                'vendor_id' => 1,
                'category_id' => 39,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            24 => 
            array (
                'id' => 25,
                'order_details_id' => 25,
                'vendor_id' => 19,
                'category_id' => NULL,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            25 => 
            array (
                'id' => 26,
                'order_details_id' => 26,
                'vendor_id' => 19,
                'category_id' => NULL,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            26 => 
            array (
                'id' => 27,
                'order_details_id' => 27,
                'vendor_id' => 19,
                'category_id' => NULL,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            27 => 
            array (
                'id' => 28,
                'order_details_id' => 28,
                'vendor_id' => 19,
                'category_id' => 512,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            28 => 
            array (
                'id' => 29,
                'order_details_id' => 29,
                'vendor_id' => 2,
                'category_id' => 526,
                'amount' => '3.00000000',
                'approval_time' => randomDateBefore(1),
                'status' => 'Approve',
            ),
            29 => 
            array (
                'id' => 30,
                'order_details_id' => 30,
                'vendor_id' => 1,
                'category_id' => 56,
                'amount' => '3.00000000',
                'approval_time' => NULL,
                'status' => 'Pending',
            ),
            30 => 
            array (
                'id' => 31,
                'order_details_id' => 31,
                'vendor_id' => 1,
                'category_id' => NULL,
                'amount' => '3.00000000',
                'approval_time' => NULL,
                'status' => 'Pending',
            ),
            31 => 
            array (
                'id' => 32,
                'order_details_id' => 32,
                'vendor_id' => 1,
                'category_id' => NULL,
                'amount' => '3.00000000',
                'approval_time' => NULL,
                'status' => 'Pending',
            ),
        ));
        
        
    }
}