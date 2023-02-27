<?php

namespace Modules\Refund\Database\Seeders;

use Illuminate\Database\Seeder;

class RefundsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('refunds')->delete();

        \DB::table('refunds')->insert(array(
            0 =>
            array(
                'id' => 1,
                'user_id' => 2,
                'order_detail_id' => 3,
                'refund_reason_id' => 9,
                'reference' => 'WanCmP',
                'quantity_sent' => 1,
                'refund_type' => 'Full',
                'refund_method' => 'Wallet',
                'shipping_method' => 'Drop',
                'payment_status' => 'Unpaid',
                'status' => 'Accepted',
            ),
            1 =>
            array(
                'id' => 2,
                'user_id' => 7,
                'order_detail_id' => 27,
                'refund_reason_id' => 4,
                'reference' => '0tmufL',
                'quantity_sent' => 1,
                'refund_type' => 'Full',
                'refund_method' => 'Wallet',
                'shipping_method' => 'Drop',
                'payment_status' => 'Paid',
                'status' => 'Accepted',
            ),
            2 =>
            array(
                'id' => 3,
                'user_id' => 6,
                'order_detail_id' => 22,
                'refund_reason_id' => 4,
                'reference' => 'SauePS',
                'quantity_sent' => 2,
                'refund_type' => 'Full',
                'refund_method' => 'Wallet',
                'shipping_method' => 'Drop',
                'payment_status' => 'Unpaid',
                'status' => 'Declined',
            ),
        ));
        
        
    }
}