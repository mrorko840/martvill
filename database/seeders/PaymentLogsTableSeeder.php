<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_logs')->delete();
        
        \DB::table('payment_logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'ORD-0001',
                'unique_code' => NULL,
                'sending_details' => '{"id":1,"user_id":2,"reference":"ORD-0001","note":null,"order_date":"2022-12-17","currency_id":3,"leave_door":null,"other_discount_amount":"0.00000000","other_discount_type":null,"shipping_charge":"7.00000000","tax_charge":"31.11900000","shipping_title":"Flat Rate","total":"923.11900000","paid":"0.00000000","total_quantity":"3.00000000","amount_received":"0.00000000","order_status_id":1,"is_delivery":0,"payment_status":"Unpaid","created_at":"2022-12-17T00:55:18.000000Z","updated_at":null,"currency":{"id":3,"name":"USD","symbol":"$","exchange_rate":null,"exchange_from":null}}',
                'response_raw' => '{"id":"ch_3MFwBIDpvvQP5tMR0lbiNwZf","object":"charge","amount":92312,"amount_captured":92312,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_3MFwBIDpvvQP5tMR0vQF3JPO","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"calculated_statement_descriptor":"Stripe","captured":true,"created":1671267344,"currency":"usd","customer":null,"description":null,"destination":null,"dispute":null,"disputed":false,"failure_balance_transaction":null,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":53,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1MFwBEDpvvQP5tMRMTdtLj4m","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"nDMklnp2vXB7Q5g0","funding":"credit","installments":null,"last4":"4242","mandate":null,"network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/payment\\/CAcaFwoVYWNjdF8xODRjVEFEcHZ2UVA1dE1SKJGI9pwGMgY43ahnVCc6LBanAjaXxA3vKWNGSITxju_Ym07UK4uzNZcU_0hvZefYoSXFbbLlttXAsa0T","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_3MFwBIDpvvQP5tMR0lbiNwZf\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1MFwBEDpvvQP5tMRMTdtLj4m","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":null,"cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"nDMklnp2vXB7Q5g0","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}',
                'response' => '{"amount":923.12,"amount_captured":923.12,"currency":"usd","code":"ORD-0001"}',
                'gateway' => 'Stripe',
                'payment_id' => NULL,
                'total' => '923.11900000',
                'currency_code' => 'USD',
                'status' => 'completed',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'ORD-0002',
                'unique_code' => NULL,
                'sending_details' => '{"id":2,"user_id":2,"reference":"ORD-0002","note":null,"order_date":"2022-12-17","currency_id":3,"leave_door":null,"other_discount_amount":"0.00000000","other_discount_type":null,"shipping_charge":"0.00000000","tax_charge":"2.02400000","shipping_title":"Local Pickup","total":"42.02400000","paid":"0.00000000","total_quantity":"1.00000000","amount_received":"0.00000000","order_status_id":1,"is_delivery":0,"payment_status":"Unpaid","created_at":"2022-12-17T01:04:02.000000Z","updated_at":null,"currency":{"id":3,"name":"USD","symbol":"$","exchange_rate":null,"exchange_from":null}}',
                'response_raw' => '{"id":"ch_3MFwJmDpvvQP5tMR0qEOx4pu","object":"charge","amount":4202,"amount_captured":4202,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_3MFwJmDpvvQP5tMR02L7Yduk","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"calculated_statement_descriptor":"Stripe","captured":true,"created":1671267870,"currency":"usd","customer":null,"description":null,"destination":null,"dispute":null,"disputed":false,"failure_balance_transaction":null,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":0,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1MFwJiDpvvQP5tMRCklliEix","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"nDMklnp2vXB7Q5g0","funding":"credit","installments":null,"last4":"4242","mandate":null,"network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/payment\\/CAcaFwoVYWNjdF8xODRjVEFEcHZ2UVA1dE1SKJ-M9pwGMgYjGJ3nca06LBZs9XrmhEYCYj7gGKJA94RrFC6p0-TGJQmNXqoIhggjjqfaaQBHDY4x_Gug","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_3MFwJmDpvvQP5tMR0qEOx4pu\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1MFwJiDpvvQP5tMRCklliEix","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":null,"cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"nDMklnp2vXB7Q5g0","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}',
                'response' => '{"amount":42.02,"amount_captured":42.02,"currency":"usd","code":"ORD-0002"}',
                'gateway' => 'Stripe',
                'payment_id' => NULL,
                'total' => '42.02400000',
                'currency_code' => 'USD',
                'status' => 'completed',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'ORD-0003',
                'unique_code' => NULL,
                'sending_details' => '{"id":3,"user_id":2,"reference":"ORD-0003","note":null,"order_date":"2022-12-17","currency_id":3,"leave_door":null,"other_discount_amount":"0.00000000","other_discount_type":null,"shipping_charge":"2.00000000","tax_charge":"1.26500000","shipping_title":"Flat Rate","total":"28.26500000","paid":"0.00000000","total_quantity":"1.00000000","amount_received":"0.00000000","order_status_id":1,"is_delivery":0,"payment_status":"Unpaid","created_at":"2022-12-17T01:16:02.000000Z","updated_at":null,"currency":{"id":3,"name":"USD","symbol":"$","exchange_rate":null,"exchange_from":null}}',
                'response_raw' => '{"status":"succeeded","amount":"28.26500000","currency":"USD"}',
                'response' => '{"amount":0.28265,"amount_captured":0,"currency":"USD","code":"ORD-0003"}',
                'gateway' => 'CashOnDelivery',
                'payment_id' => NULL,
                'total' => '28.26500000',
                'currency_code' => 'USD',
                'status' => 'completed',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'ORD-0004',
                'unique_code' => NULL,
                'sending_details' => '{"id":4,"user_id":2,"reference":"ORD-0004","note":null,"order_date":"2022-12-17","currency_id":3,"leave_door":null,"other_discount_amount":"0.00000000","other_discount_type":null,"shipping_charge":"2.00000000","tax_charge":"3.79500000","shipping_title":"Flat Rate","total":"80.79500000","paid":"0.00000000","total_quantity":"1.00000000","amount_received":"0.00000000","order_status_id":1,"is_delivery":0,"payment_status":"Unpaid","created_at":"2022-12-17T01:19:07.000000Z","updated_at":null,"currency":{"id":3,"name":"USD","symbol":"$","exchange_rate":null,"exchange_from":null}}',
                'response_raw' => NULL,
                'response' => NULL,
                'gateway' => NULL,
                'payment_id' => NULL,
                'total' => '80.79500000',
                'currency_code' => 'USD',
                'status' => 'pending',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'ORD-0005',
                'unique_code' => NULL,
                'sending_details' => '{"id":5,"user_id":2,"reference":"ORD-0005","note":null,"order_date":"2022-12-17","currency_id":3,"leave_door":null,"other_discount_amount":"0.00000000","other_discount_type":null,"shipping_charge":"0.00000000","tax_charge":"1.26500000","shipping_title":"Local Pickup","total":"26.26500000","paid":"0.00000000","total_quantity":"1.00000000","amount_received":"0.00000000","order_status_id":1,"is_delivery":0,"payment_status":"Unpaid","created_at":"2022-12-17T01:21:50.000000Z","updated_at":null,"currency":{"id":3,"name":"USD","symbol":"$","exchange_rate":null,"exchange_from":null}}',
                'response_raw' => NULL,
                'response' => NULL,
                'gateway' => NULL,
                'payment_id' => NULL,
                'total' => '26.26500000',
                'currency_code' => 'USD',
                'status' => 'pending',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'ORD-0006',
                'unique_code' => NULL,
                'sending_details' => '{"id":6,"user_id":2,"reference":"ORD-0006","note":null,"order_date":"2022-12-17","currency_id":3,"leave_door":null,"other_discount_amount":"0.00000000","other_discount_type":null,"shipping_charge":"3.00000000","tax_charge":"18.72200000","shipping_title":"Flat Rate","total":"391.72200000","paid":"0.00000000","total_quantity":"1.00000000","amount_received":"0.00000000","order_status_id":1,"is_delivery":0,"payment_status":"Unpaid","created_at":"2022-12-17T01:24:24.000000Z","updated_at":null,"currency":{"id":3,"name":"USD","symbol":"$","exchange_rate":null,"exchange_from":null}}',
                'response_raw' => '{"status":"succeeded","amount":"391.72200000","currency":"USD"}',
                'response' => '{"amount":3.91722,"amount_captured":0,"currency":"USD","code":"ORD-0006"}',
                'gateway' => 'CashOnDelivery',
                'payment_id' => NULL,
                'total' => '391.72200000',
                'currency_code' => 'USD',
                'status' => 'completed',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'ORD-0007',
                'unique_code' => NULL,
                'sending_details' => '{"id":7,"user_id":4,"reference":"ORD-0007","note":null,"order_date":"2022-12-17","currency_id":3,"leave_door":null,"other_discount_amount":"0.00000000","other_discount_type":null,"shipping_charge":"30.00000000","tax_charge":"8.16000000","shipping_title":"Flat Rate","total":"446.16000000","paid":"0.00000000","total_quantity":"3.00000000","amount_received":"0.00000000","order_status_id":1,"is_delivery":0,"payment_status":"Unpaid","created_at":"2022-12-17T01:29:06.000000Z","updated_at":null,"currency":{"id":3,"name":"USD","symbol":"$","exchange_rate":null,"exchange_from":null}}',
                'response_raw' => '{"id":"ch_3MFwhyDpvvQP5tMR27k4DXVm","object":"charge","amount":44616,"amount_captured":44616,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_3MFwhyDpvvQP5tMR2h9GouMu","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"calculated_statement_descriptor":"Stripe","captured":true,"created":1671269370,"currency":"usd","customer":null,"description":null,"destination":null,"dispute":null,"disputed":false,"failure_balance_transaction":null,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":27,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1MFwhuDpvvQP5tMRBTHmizjE","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"nDMklnp2vXB7Q5g0","funding":"credit","installments":null,"last4":"4242","mandate":null,"network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/payment\\/CAcaFwoVYWNjdF8xODRjVEFEcHZ2UVA1dE1SKPqX9pwGMgaJn9DkGx06LBbedROY2jISpvh9rA82woayP2y9qgLM0Ta_JMaauWPziKRc-4biTPY_Z1GO","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_3MFwhyDpvvQP5tMR27k4DXVm\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1MFwhuDpvvQP5tMRBTHmizjE","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":null,"cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"nDMklnp2vXB7Q5g0","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}',
                'response' => '{"amount":446.16,"amount_captured":446.16,"currency":"usd","code":"ORD-0007"}',
                'gateway' => 'Stripe',
                'payment_id' => NULL,
                'total' => '446.16000000',
                'currency_code' => 'USD',
                'status' => 'completed',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'ORD-0008',
                'unique_code' => NULL,
                'sending_details' => '{"id":8,"user_id":5,"reference":"ORD-0008","note":null,"order_date":"2022-12-17","currency_id":3,"leave_door":null,"other_discount_amount":"0.00000000","other_discount_type":null,"shipping_charge":"1.00000000","tax_charge":"0.56000000","shipping_title":"Local Pickup","total":"79.56000000","paid":"0.00000000","total_quantity":"2.00000000","amount_received":"0.00000000","order_status_id":1,"is_delivery":0,"payment_status":"Unpaid","created_at":"2022-12-17T01:36:10.000000Z","updated_at":null,"currency":{"id":3,"name":"USD","symbol":"$","exchange_rate":null,"exchange_from":null}}',
                'response_raw' => NULL,
                'response' => NULL,
                'gateway' => NULL,
                'payment_id' => NULL,
                'total' => '79.56000000',
                'currency_code' => 'USD',
                'status' => 'pending',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'ORD-0009',
                'unique_code' => NULL,
                'sending_details' => '{"id":9,"user_id":6,"reference":"ORD-0009","note":null,"order_date":"2022-12-17","currency_id":3,"leave_door":null,"other_discount_amount":"0.00000000","other_discount_type":null,"shipping_charge":"1.00000000","tax_charge":"3.96000000","shipping_title":"Local Pickup","total":"202.96000000","paid":"0.00000000","total_quantity":"4.00000000","amount_received":"0.00000000","order_status_id":1,"is_delivery":0,"payment_status":"Unpaid","created_at":"2022-12-17T01:42:08.000000Z","updated_at":null,"currency":{"id":3,"name":"USD","symbol":"$","exchange_rate":null,"exchange_from":null}}',
                'response_raw' => '{"id":"ch_3MFwubDpvvQP5tMR1MF5kj6r","object":"charge","amount":20296,"amount_captured":20296,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_3MFwubDpvvQP5tMR1TkdrWPm","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"24242","state":null},"email":null,"name":null,"phone":null},"calculated_statement_descriptor":"Stripe","captured":true,"created":1671270153,"currency":"usd","customer":null,"description":null,"destination":null,"dispute":null,"disputed":false,"failure_balance_transaction":null,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":43,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1MFwuXDpvvQP5tMRkWrzQBfS","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2052,"fingerprint":"nDMklnp2vXB7Q5g0","funding":"credit","installments":null,"last4":"4242","mandate":null,"network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/payment\\/CAcaFwoVYWNjdF8xODRjVEFEcHZ2UVA1dE1SKIqe9pwGMgZhOlQ0bWE6LBaX8STYjnXksR7dtct8YbOK4z7-jewk9idiw8s4IC8YfOgHCRKyTKQAFP7i","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_3MFwubDpvvQP5tMR1MF5kj6r\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1MFwuXDpvvQP5tMRkWrzQBfS","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"24242","address_zip_check":"pass","brand":"Visa","country":"US","customer":null,"cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2052,"fingerprint":"nDMklnp2vXB7Q5g0","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}',
                'response' => '{"amount":202.96,"amount_captured":202.96,"currency":"usd","code":"ORD-0009"}',
                'gateway' => 'Stripe',
                'payment_id' => NULL,
                'total' => '202.96000000',
                'currency_code' => 'USD',
                'status' => 'completed',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'ORD-0010',
                'unique_code' => NULL,
                'sending_details' => '{"id":10,"user_id":20,"reference":"ORD-0010","note":null,"order_date":"2022-12-17","currency_id":3,"leave_door":null,"other_discount_amount":"0.00000000","other_discount_type":null,"shipping_charge":"1.00000000","tax_charge":"0.40480000","shipping_title":"Local Pickup","total":"309.40480000","paid":"0.00000000","total_quantity":"3.00000000","amount_received":"0.00000000","order_status_id":1,"is_delivery":0,"payment_status":"Unpaid","created_at":"2022-12-17T01:49:52.000000Z","updated_at":null,"currency":{"id":3,"name":"USD","symbol":"$","exchange_rate":null,"exchange_from":null}}',
                'response_raw' => '{"id":"ch_3MFx24DpvvQP5tMR36lcnFzA","object":"charge","amount":30940,"amount_captured":30940,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_3MFx24DpvvQP5tMR30qaBfCZ","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"calculated_statement_descriptor":"Stripe","captured":true,"created":1671270616,"currency":"usd","customer":null,"description":null,"destination":null,"dispute":null,"disputed":false,"failure_balance_transaction":null,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":45,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1MFx20DpvvQP5tMRDpjJItuJ","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"nDMklnp2vXB7Q5g0","funding":"credit","installments":null,"last4":"4242","mandate":null,"network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/payment\\/CAcaFwoVYWNjdF8xODRjVEFEcHZ2UVA1dE1SKNmh9pwGMgacZ6ZyKVQ6LBaqbWynERhUXlCnLp33MyiQg2CcDBlGaaET6gC-cfhCRS8KczunSaIq6D8l","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_3MFx24DpvvQP5tMR36lcnFzA\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1MFx20DpvvQP5tMRDpjJItuJ","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":null,"cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"nDMklnp2vXB7Q5g0","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}',
                'response' => '{"amount":309.4,"amount_captured":309.4,"currency":"usd","code":"ORD-0010"}',
                'gateway' => 'Stripe',
                'payment_id' => NULL,
                'total' => '309.40480000',
                'currency_code' => 'USD',
                'status' => 'completed',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'ORD-0011',
                'unique_code' => NULL,
                'sending_details' => '{"id":11,"user_id":6,"reference":"ORD-0011","note":null,"order_date":"2022-12-17","currency_id":3,"leave_door":null,"other_discount_amount":"0.00000000","other_discount_type":null,"shipping_charge":"1.00000000","tax_charge":"8.58000000","shipping_title":"Local Pickup","total":"448.58000000","paid":"0.00000000","total_quantity":"7.00000000","amount_received":"0.00000000","order_status_id":1,"is_delivery":0,"payment_status":"Unpaid","created_at":"2022-12-17T02:16:08.000000Z","updated_at":null,"currency":{"id":3,"name":"USD","symbol":"$","exchange_rate":null,"exchange_from":null}}',
                'response_raw' => '{"status":"succeeded","amount":"448.58000000","currency":"USD"}',
                'response' => '{"amount":4.4858,"amount_captured":0,"currency":"USD","code":"ORD-0011"}',
                'gateway' => 'CashOnDelivery',
                'payment_id' => NULL,
                'total' => '448.58000000',
                'currency_code' => 'USD',
                'status' => 'completed',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'ORD-0012',
                'unique_code' => NULL,
                'sending_details' => '{"id":12,"user_id":7,"reference":"ORD-0012","note":null,"order_date":"2022-12-17","currency_id":3,"leave_door":null,"other_discount_amount":"0.00000000","other_discount_type":null,"shipping_charge":"15.00000000","tax_charge":"5.56000000","shipping_title":"Flat Rate","total":"298.56000000","paid":"0.00000000","total_quantity":"5.00000000","amount_received":"0.00000000","order_status_id":1,"is_delivery":0,"payment_status":"Unpaid","created_at":"2022-12-17T02:21:18.000000Z","updated_at":null,"currency":{"id":3,"name":"USD","symbol":"$","exchange_rate":null,"exchange_from":null}}',
                'response_raw' => '{"id":"ch_3MFxWUDpvvQP5tMR3O3hb8Cf","object":"charge","amount":29856,"amount_captured":29856,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_3MFxWUDpvvQP5tMR399o6QUQ","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"calculated_statement_descriptor":"Stripe","captured":true,"created":1671272502,"currency":"usd","customer":null,"description":null,"destination":null,"dispute":null,"disputed":false,"failure_balance_transaction":null,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":25,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1MFxWQDpvvQP5tMRjgZ3FUGR","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"nDMklnp2vXB7Q5g0","funding":"credit","installments":null,"last4":"4242","mandate":null,"network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/payment\\/CAcaFwoVYWNjdF8xODRjVEFEcHZ2UVA1dE1SKLew9pwGMgZIlCzrNyI6LBaYQWl7OAmtSW3T5JdbjNDZy72q8gzLEZPfldkt1DvrpoAs_q3XbUY95ppY","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_3MFxWUDpvvQP5tMR3O3hb8Cf\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1MFxWQDpvvQP5tMRjgZ3FUGR","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":null,"cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"nDMklnp2vXB7Q5g0","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}',
                'response' => '{"amount":298.56,"amount_captured":298.56,"currency":"usd","code":"ORD-0012"}',
                'gateway' => 'Stripe',
                'payment_id' => NULL,
                'total' => '298.56000000',
                'currency_code' => 'USD',
                'status' => 'completed',
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 'ORD-0013',
                'unique_code' => NULL,
                'sending_details' => '{"id":13,"user_id":9,"reference":"ORD-0013","note":null,"order_date":"2022-12-17","currency_id":3,"leave_door":null,"other_discount_amount":"0.00000000","other_discount_type":null,"shipping_charge":null,"tax_charge":"0.00000000","shipping_title":null,"total":"50.00000000","paid":"0.00000000","total_quantity":"1.00000000","amount_received":"0.00000000","order_status_id":1,"is_delivery":0,"payment_status":"Unpaid","created_at":"2022-12-17T02:23:24.000000Z","updated_at":null,"currency":{"id":3,"name":"USD","symbol":"$","exchange_rate":null,"exchange_from":null}}',
                'response_raw' => '{"id":"ch_3MFxYdDpvvQP5tMR0wF0HJdW","object":"charge","amount":5000,"amount_captured":5000,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_3MFxYdDpvvQP5tMR02tr62l7","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"calculated_statement_descriptor":"Stripe","captured":true,"created":1671272635,"currency":"usd","customer":null,"description":null,"destination":null,"dispute":null,"disputed":false,"failure_balance_transaction":null,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":59,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1MFxYZDpvvQP5tMRrjOyI8Tz","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"nDMklnp2vXB7Q5g0","funding":"credit","installments":null,"last4":"4242","mandate":null,"network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/payment\\/CAcaFwoVYWNjdF8xODRjVEFEcHZ2UVA1dE1SKLyx9pwGMgYGDYfQWhM6LBYP5ZwTQEeTKuCPKsVSkLZ-Vdsb4deXZPDVj3UwHY_BNkAL-8iVTq6pdRv-","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_3MFxYdDpvvQP5tMR0wF0HJdW\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1MFxYZDpvvQP5tMRrjOyI8Tz","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":null,"cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"nDMklnp2vXB7Q5g0","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}',
                'response' => '{"amount":50,"amount_captured":50,"currency":"usd","code":"ORD-0013"}',
                'gateway' => 'Stripe',
                'payment_id' => NULL,
                'total' => '50.00000000',
                'currency_code' => 'USD',
                'status' => 'completed',
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 'ORD-0014',
                'unique_code' => NULL,
                'sending_details' => '{"id":14,"user_id":8,"reference":"ORD-0014","note":null,"order_date":"2022-12-17","currency_id":3,"leave_door":null,"other_discount_amount":"0.00000000","other_discount_type":null,"shipping_charge":"15.00000000","tax_charge":"24.18000000","shipping_title":"Flat Rate","total":"1248.18000000","paid":"0.00000000","total_quantity":"3.00000000","amount_received":"0.00000000","order_status_id":1,"is_delivery":0,"payment_status":"Unpaid","created_at":"2022-12-17T02:26:34.000000Z","updated_at":null,"currency":{"id":3,"name":"USD","symbol":"$","exchange_rate":null,"exchange_from":null}}',
                'response_raw' => '{"status":"succeeded","amount":"1248.18000000","currency":"USD"}',
                'response' => '{"amount":12.4818,"amount_captured":0,"currency":"USD","code":"ORD-0014"}',
                'gateway' => 'CashOnDelivery',
                'payment_id' => NULL,
                'total' => '1248.18000000',
                'currency_code' => 'USD',
                'status' => 'completed',
            ),
        ));
        
        
    }
}