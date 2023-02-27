<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersMetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('orders_meta')->delete();

        \DB::table('orders_meta')->insert(array (
            0 =>
            array (
                'id' => 1,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'billing_address_id',
                'value' => '7',
            ),
            1 =>
            array (
                'id' => 2,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'billing_address_first_name',
                'value' => 'Blaine',
            ),
            2 =>
            array (
                'id' => 3,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'billing_address_last_name',
                'value' => 'Keller',
            ),
            3 =>
            array (
                'id' => 4,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'billing_address_phone',
                'value' => '0135467989',
            ),
            4 =>
            array (
                'id' => 5,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'billing_address_email',
                'value' => 'blainekeller@gmail.com',
            ),
            5 =>
            array (
                'id' => 6,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'billing_address_city',
                'value' => 'dhaka',
            ),
            6 =>
            array (
                'id' => 7,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'billing_address_state',
                'value' => 'Dhaka',
            ),
            7 =>
            array (
                'id' => 8,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'billing_address_zip',
                'value' => '1229',
            ),
            8 =>
            array (
                'id' => 9,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'billing_address_country',
                'value' => 'Bangladesh',
            ),
            9 =>
            array (
                'id' => 10,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'billing_address_type_of_place',
                'value' => 'home',
            ),
            10 =>
            array (
                'id' => 11,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'billing_address_address_1',
                'value' => 'Road no 1, House no 129',
            ),
            11 =>
            array (
                'id' => 12,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'billing_address_address_2',
                'value' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'billing_address_created_at',
                'value' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'billing_address_updated_at',
                'value' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'shipping_address_first_name',
                'value' => 'Blaine',
            ),
            15 =>
            array (
                'id' => 16,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'shipping_address_last_name',
                'value' => 'Keller',
            ),
            16 =>
            array (
                'id' => 17,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'shipping_address_phone',
                'value' => '0135467989',
            ),
            17 =>
            array (
                'id' => 18,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'shipping_address_email',
                'value' => 'blainekeller@gmail.com',
            ),
            18 =>
            array (
                'id' => 19,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'shipping_address_city',
                'value' => 'dhaka',
            ),
            19 =>
            array (
                'id' => 20,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'shipping_address_state',
                'value' => 'Dhaka',
            ),
            20 =>
            array (
                'id' => 21,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'shipping_address_zip',
                'value' => '1229',
            ),
            21 =>
            array (
                'id' => 22,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'shipping_address_country',
                'value' => 'Bangladesh',
            ),
            22 =>
            array (
                'id' => 23,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'shipping_address_type_of_place',
                'value' => 'home',
            ),
            23 =>
            array (
                'id' => 24,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'shipping_address_address_1',
                'value' => 'Road no 1, House no 129',
            ),
            24 =>
            array (
                'id' => 25,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'shipping_address_address_2',
                'value' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'shipping_address_created_at',
                'value' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'shipping_address_updated_at',
                'value' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'order_id' => 1,
                'type' => 'string',
                'key' => 'track_code',
                'value' => 'XNDOHP25UD',
            ),
            28 =>
            array (
                'id' => 29,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'billing_address_id',
                'value' => '7',
            ),
            29 =>
            array (
                'id' => 30,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'billing_address_first_name',
                'value' => 'Blaine',
            ),
            30 =>
            array (
                'id' => 31,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'billing_address_last_name',
                'value' => 'Keller',
            ),
            31 =>
            array (
                'id' => 32,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'billing_address_phone',
                'value' => '0135467989',
            ),
            32 =>
            array (
                'id' => 33,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'billing_address_email',
                'value' => 'blainekeller@gmail.com',
            ),
            33 =>
            array (
                'id' => 34,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'billing_address_city',
                'value' => 'dhaka',
            ),
            34 =>
            array (
                'id' => 35,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'billing_address_state',
                'value' => 'Dhaka',
            ),
            35 =>
            array (
                'id' => 36,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'billing_address_zip',
                'value' => '1229',
            ),
            36 =>
            array (
                'id' => 37,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'billing_address_country',
                'value' => 'Bangladesh',
            ),
            37 =>
            array (
                'id' => 38,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'billing_address_type_of_place',
                'value' => 'home',
            ),
            38 =>
            array (
                'id' => 39,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'billing_address_address_1',
                'value' => 'Road no 1, House no 129',
            ),
            39 =>
            array (
                'id' => 40,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'billing_address_address_2',
                'value' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'billing_address_created_at',
                'value' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'billing_address_updated_at',
                'value' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'shipping_address_first_name',
                'value' => 'Blaine',
            ),
            43 =>
            array (
                'id' => 44,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'shipping_address_last_name',
                'value' => 'Keller',
            ),
            44 =>
            array (
                'id' => 45,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'shipping_address_phone',
                'value' => '0135467989',
            ),
            45 =>
            array (
                'id' => 46,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'shipping_address_email',
                'value' => 'blainekeller@gmail.com',
            ),
            46 =>
            array (
                'id' => 47,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'shipping_address_city',
                'value' => 'dhaka',
            ),
            47 =>
            array (
                'id' => 48,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'shipping_address_state',
                'value' => 'Dhaka',
            ),
            48 =>
            array (
                'id' => 49,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'shipping_address_zip',
                'value' => '1229',
            ),
            49 =>
            array (
                'id' => 50,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'shipping_address_country',
                'value' => 'Bangladesh',
            ),
            50 =>
            array (
                'id' => 51,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'shipping_address_type_of_place',
                'value' => 'home',
            ),
            51 =>
            array (
                'id' => 52,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'shipping_address_address_1',
                'value' => 'Road no 1, House no 129',
            ),
            52 =>
            array (
                'id' => 53,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'shipping_address_address_2',
                'value' => NULL,
            ),
            53 =>
            array (
                'id' => 54,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'shipping_address_created_at',
                'value' => NULL,
            ),
            54 =>
            array (
                'id' => 55,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'shipping_address_updated_at',
                'value' => NULL,
            ),
            55 =>
            array (
                'id' => 56,
                'order_id' => 2,
                'type' => 'string',
                'key' => 'track_code',
                'value' => 'MOAFBKGA5Z',
            ),
            56 =>
            array (
                'id' => 57,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'billing_address_id',
                'value' => '7',
            ),
            57 =>
            array (
                'id' => 58,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'billing_address_first_name',
                'value' => 'Blaine',
            ),
            58 =>
            array (
                'id' => 59,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'billing_address_last_name',
                'value' => 'Keller',
            ),
            59 =>
            array (
                'id' => 60,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'billing_address_phone',
                'value' => '0135467989',
            ),
            60 =>
            array (
                'id' => 61,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'billing_address_email',
                'value' => 'blainekeller@gmail.com',
            ),
            61 =>
            array (
                'id' => 62,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'billing_address_city',
                'value' => 'dhaka',
            ),
            62 =>
            array (
                'id' => 63,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'billing_address_state',
                'value' => 'Dhaka',
            ),
            63 =>
            array (
                'id' => 64,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'billing_address_zip',
                'value' => '1229',
            ),
            64 =>
            array (
                'id' => 65,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'billing_address_country',
                'value' => 'Bangladesh',
            ),
            65 =>
            array (
                'id' => 66,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'billing_address_type_of_place',
                'value' => 'home',
            ),
            66 =>
            array (
                'id' => 67,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'billing_address_address_1',
                'value' => 'Road no 1, House no 129',
            ),
            67 =>
            array (
                'id' => 68,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'billing_address_address_2',
                'value' => NULL,
            ),
            68 =>
            array (
                'id' => 69,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'billing_address_created_at',
                'value' => NULL,
            ),
            69 =>
            array (
                'id' => 70,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'billing_address_updated_at',
                'value' => NULL,
            ),
            70 =>
            array (
                'id' => 71,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'shipping_address_first_name',
                'value' => 'Blaine',
            ),
            71 =>
            array (
                'id' => 72,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'shipping_address_last_name',
                'value' => 'Keller',
            ),
            72 =>
            array (
                'id' => 73,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'shipping_address_phone',
                'value' => '0135467989',
            ),
            73 =>
            array (
                'id' => 74,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'shipping_address_email',
                'value' => 'blainekeller@gmail.com',
            ),
            74 =>
            array (
                'id' => 75,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'shipping_address_city',
                'value' => 'dhaka',
            ),
            75 =>
            array (
                'id' => 76,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'shipping_address_state',
                'value' => 'Dhaka',
            ),
            76 =>
            array (
                'id' => 77,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'shipping_address_zip',
                'value' => '1229',
            ),
            77 =>
            array (
                'id' => 78,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'shipping_address_country',
                'value' => 'Bangladesh',
            ),
            78 =>
            array (
                'id' => 79,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'shipping_address_type_of_place',
                'value' => 'home',
            ),
            79 =>
            array (
                'id' => 80,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'shipping_address_address_1',
                'value' => 'Road no 1, House no 129',
            ),
            80 =>
            array (
                'id' => 81,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'shipping_address_address_2',
                'value' => NULL,
            ),
            81 =>
            array (
                'id' => 82,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'shipping_address_created_at',
                'value' => NULL,
            ),
            82 =>
            array (
                'id' => 83,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'shipping_address_updated_at',
                'value' => NULL,
            ),
            83 =>
            array (
                'id' => 84,
                'order_id' => 3,
                'type' => 'string',
                'key' => 'track_code',
                'value' => 'LZTQT5L6KU',
            ),
            84 =>
            array (
                'id' => 85,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'billing_address_id',
                'value' => '7',
            ),
            85 =>
            array (
                'id' => 86,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'billing_address_first_name',
                'value' => 'Blaine',
            ),
            86 =>
            array (
                'id' => 87,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'billing_address_last_name',
                'value' => 'Keller',
            ),
            87 =>
            array (
                'id' => 88,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'billing_address_phone',
                'value' => '0135467989',
            ),
            88 =>
            array (
                'id' => 89,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'billing_address_email',
                'value' => 'blainekeller@gmail.com',
            ),
            89 =>
            array (
                'id' => 90,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'billing_address_city',
                'value' => 'dhaka',
            ),
            90 =>
            array (
                'id' => 91,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'billing_address_state',
                'value' => 'Dhaka',
            ),
            91 =>
            array (
                'id' => 92,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'billing_address_zip',
                'value' => '1229',
            ),
            92 =>
            array (
                'id' => 93,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'billing_address_country',
                'value' => 'Bangladesh',
            ),
            93 =>
            array (
                'id' => 94,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'billing_address_type_of_place',
                'value' => 'home',
            ),
            94 =>
            array (
                'id' => 95,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'billing_address_address_1',
                'value' => 'Road no 1, House no 129',
            ),
            95 =>
            array (
                'id' => 96,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'billing_address_address_2',
                'value' => NULL,
            ),
            96 =>
            array (
                'id' => 97,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'billing_address_created_at',
                'value' => NULL,
            ),
            97 =>
            array (
                'id' => 98,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'billing_address_updated_at',
                'value' => NULL,
            ),
            98 =>
            array (
                'id' => 99,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'shipping_address_first_name',
                'value' => 'Blaine',
            ),
            99 =>
            array (
                'id' => 100,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'shipping_address_last_name',
                'value' => 'Keller',
            ),
            100 =>
            array (
                'id' => 101,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'shipping_address_phone',
                'value' => '0135467989',
            ),
            101 =>
            array (
                'id' => 102,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'shipping_address_email',
                'value' => 'blainekeller@gmail.com',
            ),
            102 =>
            array (
                'id' => 103,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'shipping_address_city',
                'value' => 'dhaka',
            ),
            103 =>
            array (
                'id' => 104,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'shipping_address_state',
                'value' => 'Dhaka',
            ),
            104 =>
            array (
                'id' => 105,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'shipping_address_zip',
                'value' => '1229',
            ),
            105 =>
            array (
                'id' => 106,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'shipping_address_country',
                'value' => 'Bangladesh',
            ),
            106 =>
            array (
                'id' => 107,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'shipping_address_type_of_place',
                'value' => 'home',
            ),
            107 =>
            array (
                'id' => 108,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'shipping_address_address_1',
                'value' => 'Road no 1, House no 129',
            ),
            108 =>
            array (
                'id' => 109,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'shipping_address_address_2',
                'value' => NULL,
            ),
            109 =>
            array (
                'id' => 110,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'shipping_address_created_at',
                'value' => NULL,
            ),
            110 =>
            array (
                'id' => 111,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'shipping_address_updated_at',
                'value' => NULL,
            ),
            111 =>
            array (
                'id' => 112,
                'order_id' => 4,
                'type' => 'string',
                'key' => 'track_code',
                'value' => 'OB46NMZNC8',
            ),
            112 =>
            array (
                'id' => 113,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'billing_address_id',
                'value' => '7',
            ),
            113 =>
            array (
                'id' => 114,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'billing_address_first_name',
                'value' => 'Blaine',
            ),
            114 =>
            array (
                'id' => 115,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'billing_address_last_name',
                'value' => 'Keller',
            ),
            115 =>
            array (
                'id' => 116,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'billing_address_phone',
                'value' => '0135467989',
            ),
            116 =>
            array (
                'id' => 117,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'billing_address_email',
                'value' => 'blainekeller@gmail.com',
            ),
            117 =>
            array (
                'id' => 118,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'billing_address_city',
                'value' => 'dhaka',
            ),
            118 =>
            array (
                'id' => 119,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'billing_address_state',
                'value' => 'Dhaka',
            ),
            119 =>
            array (
                'id' => 120,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'billing_address_zip',
                'value' => '1229',
            ),
            120 =>
            array (
                'id' => 121,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'billing_address_country',
                'value' => 'Bangladesh',
            ),
            121 =>
            array (
                'id' => 122,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'billing_address_type_of_place',
                'value' => 'home',
            ),
            122 =>
            array (
                'id' => 123,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'billing_address_address_1',
                'value' => 'Road no 1, House no 129',
            ),
            123 =>
            array (
                'id' => 124,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'billing_address_address_2',
                'value' => NULL,
            ),
            124 =>
            array (
                'id' => 125,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'billing_address_created_at',
                'value' => NULL,
            ),
            125 =>
            array (
                'id' => 126,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'billing_address_updated_at',
                'value' => NULL,
            ),
            126 =>
            array (
                'id' => 127,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'shipping_address_first_name',
                'value' => 'Blaine',
            ),
            127 =>
            array (
                'id' => 128,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'shipping_address_last_name',
                'value' => 'Keller',
            ),
            128 =>
            array (
                'id' => 129,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'shipping_address_phone',
                'value' => '0135467989',
            ),
            129 =>
            array (
                'id' => 130,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'shipping_address_email',
                'value' => 'blainekeller@gmail.com',
            ),
            130 =>
            array (
                'id' => 131,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'shipping_address_city',
                'value' => 'dhaka',
            ),
            131 =>
            array (
                'id' => 132,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'shipping_address_state',
                'value' => 'Dhaka',
            ),
            132 =>
            array (
                'id' => 133,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'shipping_address_zip',
                'value' => '1229',
            ),
            133 =>
            array (
                'id' => 134,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'shipping_address_country',
                'value' => 'Bangladesh',
            ),
            134 =>
            array (
                'id' => 135,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'shipping_address_type_of_place',
                'value' => 'home',
            ),
            135 =>
            array (
                'id' => 136,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'shipping_address_address_1',
                'value' => 'Road no 1, House no 129',
            ),
            136 =>
            array (
                'id' => 137,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'shipping_address_address_2',
                'value' => NULL,
            ),
            137 =>
            array (
                'id' => 138,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'shipping_address_created_at',
                'value' => NULL,
            ),
            138 =>
            array (
                'id' => 139,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'shipping_address_updated_at',
                'value' => NULL,
            ),
            139 =>
            array (
                'id' => 140,
                'order_id' => 5,
                'type' => 'string',
                'key' => 'track_code',
                'value' => 'Z2ENLISMZF',
            ),
            140 =>
            array (
                'id' => 141,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'billing_address_id',
                'value' => '7',
            ),
            141 =>
            array (
                'id' => 142,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'billing_address_first_name',
                'value' => 'Blaine',
            ),
            142 =>
            array (
                'id' => 143,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'billing_address_last_name',
                'value' => 'Keller',
            ),
            143 =>
            array (
                'id' => 144,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'billing_address_phone',
                'value' => '0135467989',
            ),
            144 =>
            array (
                'id' => 145,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'billing_address_email',
                'value' => 'blainekeller@gmail.com',
            ),
            145 =>
            array (
                'id' => 146,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'billing_address_city',
                'value' => 'dhaka',
            ),
            146 =>
            array (
                'id' => 147,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'billing_address_state',
                'value' => 'Dhaka',
            ),
            147 =>
            array (
                'id' => 148,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'billing_address_zip',
                'value' => '1229',
            ),
            148 =>
            array (
                'id' => 149,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'billing_address_country',
                'value' => 'Bangladesh',
            ),
            149 =>
            array (
                'id' => 150,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'billing_address_type_of_place',
                'value' => 'home',
            ),
            150 =>
            array (
                'id' => 151,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'billing_address_address_1',
                'value' => 'Road no 1, House no 129',
            ),
            151 =>
            array (
                'id' => 152,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'billing_address_address_2',
                'value' => NULL,
            ),
            152 =>
            array (
                'id' => 153,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'billing_address_created_at',
                'value' => NULL,
            ),
            153 =>
            array (
                'id' => 154,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'billing_address_updated_at',
                'value' => NULL,
            ),
            154 =>
            array (
                'id' => 155,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'shipping_address_first_name',
                'value' => 'Blaine',
            ),
            155 =>
            array (
                'id' => 156,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'shipping_address_last_name',
                'value' => 'Keller',
            ),
            156 =>
            array (
                'id' => 157,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'shipping_address_phone',
                'value' => '0135467989',
            ),
            157 =>
            array (
                'id' => 158,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'shipping_address_email',
                'value' => 'blainekeller@gmail.com',
            ),
            158 =>
            array (
                'id' => 159,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'shipping_address_city',
                'value' => 'dhaka',
            ),
            159 =>
            array (
                'id' => 160,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'shipping_address_state',
                'value' => 'Dhaka',
            ),
            160 =>
            array (
                'id' => 161,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'shipping_address_zip',
                'value' => '1229',
            ),
            161 =>
            array (
                'id' => 162,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'shipping_address_country',
                'value' => 'Bangladesh',
            ),
            162 =>
            array (
                'id' => 163,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'shipping_address_type_of_place',
                'value' => 'home',
            ),
            163 =>
            array (
                'id' => 164,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'shipping_address_address_1',
                'value' => 'Road no 1, House no 129',
            ),
            164 =>
            array (
                'id' => 165,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'shipping_address_address_2',
                'value' => NULL,
            ),
            165 =>
            array (
                'id' => 166,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'shipping_address_created_at',
                'value' => NULL,
            ),
            166 =>
            array (
                'id' => 167,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'shipping_address_updated_at',
                'value' => NULL,
            ),
            167 =>
            array (
                'id' => 168,
                'order_id' => 6,
                'type' => 'string',
                'key' => 'track_code',
                'value' => '8CIE08MM4C',
            ),
            168 =>
            array (
                'id' => 169,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'billing_address_id',
                'value' => '9',
            ),
            169 =>
            array (
                'id' => 170,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'billing_address_first_name',
                'value' => 'snowflake',
            ),
            170 =>
            array (
                'id' => 171,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'billing_address_last_name',
                'value' => 'hamiz',
            ),
            171 =>
            array (
                'id' => 172,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'billing_address_phone',
                'value' => '01788026663',
            ),
            172 =>
            array (
                'id' => 173,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'billing_address_email',
                'value' => 'snowflakehamiz@gmail.com',
            ),
            173 =>
            array (
                'id' => 174,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'billing_address_city',
                'value' => 'lokossa',
            ),
            174 =>
            array (
                'id' => 175,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'billing_address_state',
                'value' => 'Mono',
            ),
            175 =>
            array (
                'id' => 176,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'billing_address_zip',
                'value' => '1229',
            ),
            176 =>
            array (
                'id' => 177,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'billing_address_country',
                'value' => 'Benin',
            ),
            177 =>
            array (
                'id' => 178,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'billing_address_type_of_place',
                'value' => 'home',
            ),
            178 =>
            array (
                'id' => 179,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'billing_address_address_1',
                'value' => 'House no 259',
            ),
            179 =>
            array (
                'id' => 180,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'billing_address_address_2',
                'value' => NULL,
            ),
            180 =>
            array (
                'id' => 181,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'billing_address_created_at',
                'value' => NULL,
            ),
            181 =>
            array (
                'id' => 182,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'billing_address_updated_at',
                'value' => NULL,
            ),
            182 =>
            array (
                'id' => 183,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'shipping_address_first_name',
                'value' => 'snowflake',
            ),
            183 =>
            array (
                'id' => 184,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'shipping_address_last_name',
                'value' => 'hamiz',
            ),
            184 =>
            array (
                'id' => 185,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'shipping_address_phone',
                'value' => '01788026663',
            ),
            185 =>
            array (
                'id' => 186,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'shipping_address_email',
                'value' => 'snowflakehamiz@gmail.com',
            ),
            186 =>
            array (
                'id' => 187,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'shipping_address_city',
                'value' => 'lokossa',
            ),
            187 =>
            array (
                'id' => 188,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'shipping_address_state',
                'value' => 'Mono',
            ),
            188 =>
            array (
                'id' => 189,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'shipping_address_zip',
                'value' => '1229',
            ),
            189 =>
            array (
                'id' => 190,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'shipping_address_country',
                'value' => 'Benin',
            ),
            190 =>
            array (
                'id' => 191,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'shipping_address_type_of_place',
                'value' => 'home',
            ),
            191 =>
            array (
                'id' => 192,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'shipping_address_address_1',
                'value' => 'House no 259',
            ),
            192 =>
            array (
                'id' => 193,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'shipping_address_address_2',
                'value' => NULL,
            ),
            193 =>
            array (
                'id' => 194,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'shipping_address_created_at',
                'value' => NULL,
            ),
            194 =>
            array (
                'id' => 195,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'shipping_address_updated_at',
                'value' => NULL,
            ),
            195 =>
            array (
                'id' => 196,
                'order_id' => 7,
                'type' => 'string',
                'key' => 'track_code',
                'value' => 'TWBWYRU7ZJ',
            ),
            196 =>
            array (
                'id' => 197,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'billing_address_id',
                'value' => '10',
            ),
            197 =>
            array (
                'id' => 198,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'billing_address_first_name',
                'value' => 'Noah',
            ),
            198 =>
            array (
                'id' => 199,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'billing_address_last_name',
                'value' => NULL,
            ),
            199 =>
            array (
                'id' => 200,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'billing_address_phone',
                'value' => '01738899999',
            ),
            200 =>
            array (
                'id' => 201,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'billing_address_email',
                'value' => 'noah@gmail.com',
            ),
            201 =>
            array (
                'id' => 202,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'billing_address_city',
                'value' => 'bellingen',
            ),
            202 =>
            array (
                'id' => 203,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'billing_address_state',
                'value' => 'Flanders',
            ),
            203 =>
            array (
                'id' => 204,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'billing_address_zip',
                'value' => '3000',
            ),
            204 =>
            array (
                'id' => 205,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'billing_address_country',
                'value' => 'Belgium',
            ),
            205 =>
            array (
                'id' => 206,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'billing_address_type_of_place',
                'value' => 'office',
            ),
            206 =>
            array (
                'id' => 207,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'billing_address_address_1',
                'value' => 'Road no 1, House no 3',
            ),
            207 =>
            array (
                'id' => 208,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'billing_address_address_2',
                'value' => NULL,
            ),
            208 =>
            array (
                'id' => 209,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'billing_address_created_at',
                'value' => NULL,
            ),
            209 =>
            array (
                'id' => 210,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'billing_address_updated_at',
                'value' => NULL,
            ),
            210 =>
            array (
                'id' => 211,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'shipping_address_first_name',
                'value' => 'Noah',
            ),
            211 =>
            array (
                'id' => 212,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'shipping_address_last_name',
                'value' => NULL,
            ),
            212 =>
            array (
                'id' => 213,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'shipping_address_phone',
                'value' => '01738899999',
            ),
            213 =>
            array (
                'id' => 214,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'shipping_address_email',
                'value' => 'noah@gmail.com',
            ),
            214 =>
            array (
                'id' => 215,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'shipping_address_city',
                'value' => 'bellingen',
            ),
            215 =>
            array (
                'id' => 216,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'shipping_address_state',
                'value' => 'Flanders',
            ),
            216 =>
            array (
                'id' => 217,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'shipping_address_zip',
                'value' => '3000',
            ),
            217 =>
            array (
                'id' => 218,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'shipping_address_country',
                'value' => 'Belgium',
            ),
            218 =>
            array (
                'id' => 219,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'shipping_address_type_of_place',
                'value' => 'office',
            ),
            219 =>
            array (
                'id' => 220,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'shipping_address_address_1',
                'value' => 'Road no 1, House no 3',
            ),
            220 =>
            array (
                'id' => 221,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'shipping_address_address_2',
                'value' => NULL,
            ),
            221 =>
            array (
                'id' => 222,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'shipping_address_created_at',
                'value' => NULL,
            ),
            222 =>
            array (
                'id' => 223,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'shipping_address_updated_at',
                'value' => NULL,
            ),
            223 =>
            array (
                'id' => 224,
                'order_id' => 8,
                'type' => 'string',
                'key' => 'track_code',
                'value' => 'JF4BY4JEHD',
            ),
            224 =>
            array (
                'id' => 225,
                'order_id' => 8,
                'type' => 'array',
                'key' => 'download_data',
                'value' => '[{"id":1,"download_limit":"5","download_expiry":"10","link":"http:\\/\\/localhost\\/laravel\\/public\\/uploads\\/20221129\\/659a1abaf5aa9f57f209e3009f7402a0.jpg","download_times":0,"is_accessible":1,"vendor_id":2,"name":"Branding PSD Mockups For Your Business","f_name":"Aug_25_-_White_And_Green_Envelope_01 1.jpg"}]',
            ),
            225 =>
            array (
                'id' => 226,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'billing_address_id',
                'value' => '11',
            ),
            226 =>
            array (
                'id' => 227,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'billing_address_first_name',
                'value' => 'Oliver',
            ),
            227 =>
            array (
                'id' => 228,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'billing_address_last_name',
                'value' => NULL,
            ),
            228 =>
            array (
                'id' => 229,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'billing_address_phone',
                'value' => '01738896666',
            ),
            229 =>
            array (
                'id' => 230,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'billing_address_email',
                'value' => 'oliver@gmail.com',
            ),
            230 =>
            array (
                'id' => 231,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'billing_address_city',
                'value' => 'boa vista',
            ),
            231 =>
            array (
                'id' => 232,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'billing_address_state',
                'value' => 'Roraima',
            ),
            232 =>
            array (
                'id' => 233,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'billing_address_zip',
                'value' => '4000',
            ),
            233 =>
            array (
                'id' => 234,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'billing_address_country',
                'value' => 'Brazil',
            ),
            234 =>
            array (
                'id' => 235,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'billing_address_type_of_place',
                'value' => 'office',
            ),
            235 =>
            array (
                'id' => 236,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'billing_address_address_1',
                'value' => 'Street 414',
            ),
            236 =>
            array (
                'id' => 237,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'billing_address_address_2',
                'value' => NULL,
            ),
            237 =>
            array (
                'id' => 238,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'billing_address_created_at',
                'value' => NULL,
            ),
            238 =>
            array (
                'id' => 239,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'billing_address_updated_at',
                'value' => NULL,
            ),
            239 =>
            array (
                'id' => 240,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'shipping_address_first_name',
                'value' => 'Oliver',
            ),
            240 =>
            array (
                'id' => 241,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'shipping_address_last_name',
                'value' => NULL,
            ),
            241 =>
            array (
                'id' => 242,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'shipping_address_phone',
                'value' => '01738896666',
            ),
            242 =>
            array (
                'id' => 243,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'shipping_address_email',
                'value' => 'oliver@gmail.com',
            ),
            243 =>
            array (
                'id' => 244,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'shipping_address_city',
                'value' => 'boa vista',
            ),
            244 =>
            array (
                'id' => 245,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'shipping_address_state',
                'value' => 'Roraima',
            ),
            245 =>
            array (
                'id' => 246,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'shipping_address_zip',
                'value' => '4000',
            ),
            246 =>
            array (
                'id' => 247,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'shipping_address_country',
                'value' => 'Brazil',
            ),
            247 =>
            array (
                'id' => 248,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'shipping_address_type_of_place',
                'value' => 'office',
            ),
            248 =>
            array (
                'id' => 249,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'shipping_address_address_1',
                'value' => 'Street 414',
            ),
            249 =>
            array (
                'id' => 250,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'shipping_address_address_2',
                'value' => NULL,
            ),
            250 =>
            array (
                'id' => 251,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'shipping_address_created_at',
                'value' => NULL,
            ),
            251 =>
            array (
                'id' => 252,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'shipping_address_updated_at',
                'value' => NULL,
            ),
            252 =>
            array (
                'id' => 253,
                'order_id' => 9,
                'type' => 'string',
                'key' => 'track_code',
                'value' => 'WGA3V9APIA',
            ),
            253 =>
            array (
                'id' => 254,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'billing_address_id',
                'value' => '20',
            ),
            254 =>
            array (
                'id' => 255,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'billing_address_first_name',
                'value' => 'Lenin',
            ),
            255 =>
            array (
                'id' => 256,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'billing_address_last_name',
                'value' => NULL,
            ),
            256 =>
            array (
                'id' => 257,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'billing_address_phone',
                'value' => '01738899977',
            ),
            257 =>
            array (
                'id' => 258,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'billing_address_email',
                'value' => 'lenin.techvill@gmail.com',
            ),
            258 =>
            array (
                'id' => 259,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'billing_address_city',
                'value' => 'Nilphamari',
            ),
            259 =>
            array (
                'id' => 260,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'billing_address_state',
                'value' => 'Rangpur Division',
            ),
            260 =>
            array (
                'id' => 261,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'billing_address_zip',
                'value' => '5300',
            ),
            261 =>
            array (
                'id' => 262,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'billing_address_country',
                'value' => 'Bangladesh',
            ),
            262 =>
            array (
                'id' => 263,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'billing_address_type_of_place',
                'value' => 'office',
            ),
            263 =>
            array (
                'id' => 264,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'billing_address_address_1',
                'value' => '86 West Cowley Court',
            ),
            264 =>
            array (
                'id' => 265,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'billing_address_address_2',
                'value' => NULL,
            ),
            265 =>
            array (
                'id' => 266,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'billing_address_created_at',
                'value' => NULL,
            ),
            266 =>
            array (
                'id' => 267,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'billing_address_updated_at',
                'value' => NULL,
            ),
            267 =>
            array (
                'id' => 268,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'shipping_address_first_name',
                'value' => 'Lenin',
            ),
            268 =>
            array (
                'id' => 269,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'shipping_address_last_name',
                'value' => NULL,
            ),
            269 =>
            array (
                'id' => 270,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'shipping_address_phone',
                'value' => '01738899977',
            ),
            270 =>
            array (
                'id' => 271,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'shipping_address_email',
                'value' => 'lenin.techvill@gmail.com',
            ),
            271 =>
            array (
                'id' => 272,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'shipping_address_city',
                'value' => 'Nilphamari',
            ),
            272 =>
            array (
                'id' => 273,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'shipping_address_state',
                'value' => 'Rangpur Division',
            ),
            273 =>
            array (
                'id' => 274,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'shipping_address_zip',
                'value' => '5300',
            ),
            274 =>
            array (
                'id' => 275,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'shipping_address_country',
                'value' => 'Bangladesh',
            ),
            275 =>
            array (
                'id' => 276,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'shipping_address_type_of_place',
                'value' => 'office',
            ),
            276 =>
            array (
                'id' => 277,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'shipping_address_address_1',
                'value' => '86 West Cowley Court',
            ),
            277 =>
            array (
                'id' => 278,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'shipping_address_address_2',
                'value' => NULL,
            ),
            278 =>
            array (
                'id' => 279,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'shipping_address_created_at',
                'value' => NULL,
            ),
            279 =>
            array (
                'id' => 280,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'shipping_address_updated_at',
                'value' => NULL,
            ),
            280 =>
            array (
                'id' => 281,
                'order_id' => 10,
                'type' => 'string',
                'key' => 'track_code',
                'value' => '2XYNPYRJUN',
            ),
            281 =>
            array (
                'id' => 282,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'billing_address_id',
                'value' => '11',
            ),
            282 =>
            array (
                'id' => 283,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'billing_address_first_name',
                'value' => 'Oliver',
            ),
            283 =>
            array (
                'id' => 284,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'billing_address_last_name',
                'value' => NULL,
            ),
            284 =>
            array (
                'id' => 285,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'billing_address_phone',
                'value' => '01738896666',
            ),
            285 =>
            array (
                'id' => 286,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'billing_address_email',
                'value' => 'oliver@gmail.com',
            ),
            286 =>
            array (
                'id' => 287,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'billing_address_city',
                'value' => 'boa vista',
            ),
            287 =>
            array (
                'id' => 288,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'billing_address_state',
                'value' => 'Roraima',
            ),
            288 =>
            array (
                'id' => 289,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'billing_address_zip',
                'value' => '4000',
            ),
            289 =>
            array (
                'id' => 290,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'billing_address_country',
                'value' => 'Brazil',
            ),
            290 =>
            array (
                'id' => 291,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'billing_address_type_of_place',
                'value' => 'office',
            ),
            291 =>
            array (
                'id' => 292,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'billing_address_address_1',
                'value' => 'Street 414',
            ),
            292 =>
            array (
                'id' => 293,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'billing_address_address_2',
                'value' => NULL,
            ),
            293 =>
            array (
                'id' => 294,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'billing_address_created_at',
                'value' => NULL,
            ),
            294 =>
            array (
                'id' => 295,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'billing_address_updated_at',
                'value' => NULL,
            ),
            295 =>
            array (
                'id' => 296,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'shipping_address_first_name',
                'value' => 'Oliver',
            ),
            296 =>
            array (
                'id' => 297,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'shipping_address_last_name',
                'value' => NULL,
            ),
            297 =>
            array (
                'id' => 298,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'shipping_address_phone',
                'value' => '01738896666',
            ),
            298 =>
            array (
                'id' => 299,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'shipping_address_email',
                'value' => 'oliver@gmail.com',
            ),
            299 =>
            array (
                'id' => 300,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'shipping_address_city',
                'value' => 'boa vista',
            ),
            300 =>
            array (
                'id' => 301,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'shipping_address_state',
                'value' => 'Roraima',
            ),
            301 =>
            array (
                'id' => 302,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'shipping_address_zip',
                'value' => '4000',
            ),
            302 =>
            array (
                'id' => 303,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'shipping_address_country',
                'value' => 'Brazil',
            ),
            303 =>
            array (
                'id' => 304,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'shipping_address_type_of_place',
                'value' => 'office',
            ),
            304 =>
            array (
                'id' => 305,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'shipping_address_address_1',
                'value' => 'Street 414',
            ),
            305 =>
            array (
                'id' => 306,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'shipping_address_address_2',
                'value' => NULL,
            ),
            306 =>
            array (
                'id' => 307,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'shipping_address_created_at',
                'value' => NULL,
            ),
            307 =>
            array (
                'id' => 308,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'shipping_address_updated_at',
                'value' => NULL,
            ),
            308 =>
            array (
                'id' => 309,
                'order_id' => 11,
                'type' => 'string',
                'key' => 'track_code',
                'value' => 'FDAPAQQAL8',
            ),
            309 =>
            array (
                'id' => 310,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'billing_address_id',
                'value' => '12',
            ),
            310 =>
            array (
                'id' => 311,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'billing_address_first_name',
                'value' => 'Liam',
            ),
            311 =>
            array (
                'id' => 312,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'billing_address_last_name',
                'value' => NULL,
            ),
            312 =>
            array (
                'id' => 313,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'billing_address_phone',
                'value' => '01738896222',
            ),
            313 =>
            array (
                'id' => 314,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'billing_address_email',
                'value' => 'liam@gmail.com',
            ),
            314 =>
            array (
                'id' => 315,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'billing_address_city',
                'value' => 'cerrillos',
            ),
            315 =>
            array (
                'id' => 316,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'billing_address_state',
                'value' => 'Salta',
            ),
            316 =>
            array (
                'id' => 317,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'billing_address_zip',
                'value' => '20000',
            ),
            317 =>
            array (
                'id' => 318,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'billing_address_country',
                'value' => 'Argentina',
            ),
            318 =>
            array (
                'id' => 319,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'billing_address_type_of_place',
                'value' => 'home',
            ),
            319 =>
            array (
                'id' => 320,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'billing_address_address_1',
                'value' => 'street 300',
            ),
            320 =>
            array (
                'id' => 321,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'billing_address_address_2',
                'value' => NULL,
            ),
            321 =>
            array (
                'id' => 322,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'billing_address_created_at',
                'value' => NULL,
            ),
            322 =>
            array (
                'id' => 323,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'billing_address_updated_at',
                'value' => NULL,
            ),
            323 =>
            array (
                'id' => 324,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'shipping_address_first_name',
                'value' => 'Liam',
            ),
            324 =>
            array (
                'id' => 325,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'shipping_address_last_name',
                'value' => NULL,
            ),
            325 =>
            array (
                'id' => 326,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'shipping_address_phone',
                'value' => '01738896222',
            ),
            326 =>
            array (
                'id' => 327,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'shipping_address_email',
                'value' => 'liam@gmail.com',
            ),
            327 =>
            array (
                'id' => 328,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'shipping_address_city',
                'value' => 'cerrillos',
            ),
            328 =>
            array (
                'id' => 329,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'shipping_address_state',
                'value' => 'Salta',
            ),
            329 =>
            array (
                'id' => 330,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'shipping_address_zip',
                'value' => '20000',
            ),
            330 =>
            array (
                'id' => 331,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'shipping_address_country',
                'value' => 'Argentina',
            ),
            331 =>
            array (
                'id' => 332,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'shipping_address_type_of_place',
                'value' => 'home',
            ),
            332 =>
            array (
                'id' => 333,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'shipping_address_address_1',
                'value' => 'street 300',
            ),
            333 =>
            array (
                'id' => 334,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'shipping_address_address_2',
                'value' => NULL,
            ),
            334 =>
            array (
                'id' => 335,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'shipping_address_created_at',
                'value' => NULL,
            ),
            335 =>
            array (
                'id' => 336,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'shipping_address_updated_at',
                'value' => NULL,
            ),
            336 =>
            array (
                'id' => 337,
                'order_id' => 12,
                'type' => 'string',
                'key' => 'track_code',
                'value' => 'JFEKWYL0KV',
            ),
            337 =>
            array (
                'id' => 338,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'billing_address_id',
                'value' => '14',
            ),
            338 =>
            array (
                'id' => 339,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'billing_address_first_name',
                'value' => 'Oliver',
            ),
            339 =>
            array (
                'id' => 340,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'billing_address_last_name',
                'value' => NULL,
            ),
            340 =>
            array (
                'id' => 341,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'billing_address_phone',
                'value' => '01738896888',
            ),
            341 =>
            array (
                'id' => 342,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'billing_address_email',
                'value' => 'oliver@gmail.com',
            ),
            342 =>
            array (
                'id' => 343,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'billing_address_city',
                'value' => 'Mymensingh',
            ),
            343 =>
            array (
                'id' => 344,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'billing_address_state',
                'value' => 'Mymensingh Division',
            ),
            344 =>
            array (
                'id' => 345,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'billing_address_zip',
                'value' => '1222',
            ),
            345 =>
            array (
                'id' => 346,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'billing_address_country',
                'value' => 'Bangladesh',
            ),
            346 =>
            array (
                'id' => 347,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'billing_address_type_of_place',
                'value' => 'home',
            ),
            347 =>
            array (
                'id' => 348,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'billing_address_address_1',
                'value' => 'Road no 12, House no 12',
            ),
            348 =>
            array (
                'id' => 349,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'billing_address_address_2',
                'value' => NULL,
            ),
            349 =>
            array (
                'id' => 350,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'billing_address_created_at',
                'value' => NULL,
            ),
            350 =>
            array (
                'id' => 351,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'billing_address_updated_at',
                'value' => NULL,
            ),
            351 =>
            array (
                'id' => 352,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'shipping_address_first_name',
                'value' => 'Oliver',
            ),
            352 =>
            array (
                'id' => 353,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'shipping_address_last_name',
                'value' => NULL,
            ),
            353 =>
            array (
                'id' => 354,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'shipping_address_phone',
                'value' => '01738896888',
            ),
            354 =>
            array (
                'id' => 355,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'shipping_address_email',
                'value' => 'oliver@gmail.com',
            ),
            355 =>
            array (
                'id' => 356,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'shipping_address_city',
                'value' => 'Mymensingh',
            ),
            356 =>
            array (
                'id' => 357,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'shipping_address_state',
                'value' => 'Mymensingh Division',
            ),
            357 =>
            array (
                'id' => 358,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'shipping_address_zip',
                'value' => '1222',
            ),
            358 =>
            array (
                'id' => 359,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'shipping_address_country',
                'value' => 'Bangladesh',
            ),
            359 =>
            array (
                'id' => 360,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'shipping_address_type_of_place',
                'value' => 'home',
            ),
            360 =>
            array (
                'id' => 361,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'shipping_address_address_1',
                'value' => 'Road no 12, House no 12',
            ),
            361 =>
            array (
                'id' => 362,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'shipping_address_address_2',
                'value' => NULL,
            ),
            362 =>
            array (
                'id' => 363,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'shipping_address_created_at',
                'value' => NULL,
            ),
            363 =>
            array (
                'id' => 364,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'shipping_address_updated_at',
                'value' => NULL,
            ),
            364 =>
            array (
                'id' => 365,
                'order_id' => 13,
                'type' => 'string',
                'key' => 'track_code',
                'value' => 'RCN6ORFAOJ',
            ),
            365 =>
            array (
                'id' => 366,
                'order_id' => 13,
                'type' => 'array',
                'key' => 'download_data',
                'value' => '[{"id":1,"download_limit":"5","download_expiry":"10","link":"http:\\/\\/localhost\\/laravel\\/public\\/uploads\\/20221129\\/659a1abaf5aa9f57f209e3009f7402a0.jpg","download_times":0,"is_accessible":1,"vendor_id":2,"name":"Branding PSD Mockups For Your Business","f_name":"Aug_25_-_White_And_Green_Envelope_01 1.jpg"}]',
            ),
            366 =>
            array (
                'id' => 367,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'billing_address_id',
                'value' => '13',
            ),
            367 =>
            array (
                'id' => 368,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'billing_address_first_name',
                'value' => 'Elijah',
            ),
            368 =>
            array (
                'id' => 369,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'billing_address_last_name',
                'value' => NULL,
            ),
            369 =>
            array (
                'id' => 370,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'billing_address_phone',
                'value' => '01738896777',
            ),
            370 =>
            array (
                'id' => 371,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'billing_address_email',
                'value' => 'elijah@gmail.com',
            ),
            371 =>
            array (
                'id' => 372,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'billing_address_city',
                'value' => 'baodi',
            ),
            372 =>
            array (
                'id' => 373,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'billing_address_state',
                'value' => 'Fujian',
            ),
            373 =>
            array (
                'id' => 374,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'billing_address_zip',
                'value' => '3300',
            ),
            374 =>
            array (
                'id' => 375,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'billing_address_country',
                'value' => 'China',
            ),
            375 =>
            array (
                'id' => 376,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'billing_address_type_of_place',
                'value' => 'home',
            ),
            376 =>
            array (
                'id' => 377,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'billing_address_address_1',
                'value' => 'Street 515',
            ),
            377 =>
            array (
                'id' => 378,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'billing_address_address_2',
                'value' => NULL,
            ),
            378 =>
            array (
                'id' => 379,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'billing_address_created_at',
                'value' => NULL,
            ),
            379 =>
            array (
                'id' => 380,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'billing_address_updated_at',
                'value' => NULL,
            ),
            380 =>
            array (
                'id' => 381,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'shipping_address_first_name',
                'value' => 'Elijah',
            ),
            381 =>
            array (
                'id' => 382,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'shipping_address_last_name',
                'value' => NULL,
            ),
            382 =>
            array (
                'id' => 383,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'shipping_address_phone',
                'value' => '01738896777',
            ),
            383 =>
            array (
                'id' => 384,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'shipping_address_email',
                'value' => 'elijah@gmail.com',
            ),
            384 =>
            array (
                'id' => 385,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'shipping_address_city',
                'value' => 'baodi',
            ),
            385 =>
            array (
                'id' => 386,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'shipping_address_state',
                'value' => 'Fujian',
            ),
            386 =>
            array (
                'id' => 387,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'shipping_address_zip',
                'value' => '3300',
            ),
            387 =>
            array (
                'id' => 388,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'shipping_address_country',
                'value' => 'China',
            ),
            388 =>
            array (
                'id' => 389,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'shipping_address_type_of_place',
                'value' => 'home',
            ),
            389 =>
            array (
                'id' => 390,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'shipping_address_address_1',
                'value' => 'Street 515',
            ),
            390 =>
            array (
                'id' => 391,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'shipping_address_address_2',
                'value' => NULL,
            ),
            391 =>
            array (
                'id' => 392,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'shipping_address_created_at',
                'value' => NULL,
            ),
            392 =>
            array (
                'id' => 393,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'shipping_address_updated_at',
                'value' => NULL,
            ),
            393 =>
            array (
                'id' => 394,
                'order_id' => 14,
                'type' => 'string',
                'key' => 'track_code',
                'value' => '6RNEPEKXMM',
            ),
        ));


    }
}
