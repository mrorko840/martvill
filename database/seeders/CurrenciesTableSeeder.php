<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('currencies')->delete();

        \DB::table('currencies')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'BDT',
                'symbol' => '৳',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'EUR',
                'symbol' => '€',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'USD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'GBP',
                'symbol' => '£',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'RUB',
                'symbol' => '₽',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'AFN',
                'symbol' => 'Afs',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'ALL',
                'symbol' => 'Lek',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'DZD',
                'symbol' => 'DA',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'AOA',
                'symbol' => 'Kz',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'XCD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'ARS',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'AMD',
                'symbol' => '֏',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'AWG',
                'symbol' => 'ƒ',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'SHP',
                'symbol' => '£',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'AUD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'AZN',
                'symbol' => '₼',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'BSD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'BHD',
                'symbol' => 'BD',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'BBD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'BYN',
                'symbol' => 'Rbls',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'BZD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'XOF',
                'symbol' => 'Fr',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'BMD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'BTN',
                'symbol' => 'Nu',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'INR',
                'symbol' => '₹',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'BOB',
                'symbol' => 'Bs',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'BAM',
                'symbol' => 'KM',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'BWP',
                'symbol' => 'P',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'BRL',
                'symbol' => 'R$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'BND',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'name' => 'SGD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'name' => 'BGN',
                'symbol' => 'Lev',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'name' => 'BIF',
                'symbol' => 'Fr',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            33 =>
            array (
                'id' => 34,
                'name' => 'KHR',
                'symbol' => 'CR',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            34 =>
            array (
                'id' => 35,
                'name' => 'XAF',
                'symbol' => 'Fr',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            35 =>
            array (
                'id' => 36,
                'name' => 'CAD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            36 =>
            array (
                'id' => 37,
                'name' => 'CVE',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            37 =>
            array (
                'id' => 38,
                'name' => 'KYD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'name' => 'CLP',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            39 =>
            array (
                'id' => 40,
                'name' => 'CNY',
                'symbol' => '¥',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'name' => 'COP',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'name' => 'KMF',
                'symbol' => 'Fr',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'name' => 'CDF',
                'symbol' => 'Fr',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            43 =>
            array (
                'id' => 44,
                'name' => 'NZD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            44 =>
            array (
                'id' => 45,
                'name' => 'CRC',
                'symbol' => '₡',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            45 =>
            array (
                'id' => 46,
                'name' => 'HRK',
                'symbol' => 'kn',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            46 =>
            array (
                'id' => 47,
                'name' => 'CUP',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            47 =>
            array (
                'id' => 48,
                'name' => 'ANG',
                'symbol' => 'ƒ',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            48 =>
            array (
                'id' => 49,
                'name' => 'CZK',
                'symbol' => 'Kč',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            49 =>
            array (
                'id' => 50,
                'name' => 'DKK',
                'symbol' => 'kr',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            50 =>
            array (
                'id' => 51,
                'name' => 'DJF',
                'symbol' => 'Fr',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            51 =>
            array (
                'id' => 52,
                'name' => 'DOP',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            52 =>
            array (
                'id' => 53,
                'name' => 'EGP',
                'symbol' => 'LE',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            53 =>
            array (
                'id' => 54,
                'name' => 'ERN',
                'symbol' => 'Nkf',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            54 =>
            array (
                'id' => 55,
                'name' => 'SZL',
                'symbol' => 'E',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            55 =>
            array (
                'id' => 56,
                'name' => 'ZAR',
                'symbol' => 'R',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            56 =>
            array (
                'id' => 57,
                'name' => 'ETB',
                'symbol' => 'Br',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            57 =>
            array (
                'id' => 58,
                'name' => 'FKP',
                'symbol' => '£',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            58 =>
            array (
                'id' => 59,
                'name' => 'FJD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            59 =>
            array (
                'id' => 60,
                'name' => 'XPF',
                'symbol' => 'Fr',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            60 =>
            array (
                'id' => 61,
                'name' => 'GMD',
                'symbol' => 'D',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            61 =>
            array (
                'id' => 62,
                'name' => 'GEL',
                'symbol' => '₾',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            62 =>
            array (
                'id' => 63,
                'name' => 'GHS',
                'symbol' => '₵',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            63 =>
            array (
                'id' => 64,
                'name' => 'GIP',
                'symbol' => '£',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            64 =>
            array (
                'id' => 65,
                'name' => 'GTQ',
                'symbol' => 'Q',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            65 =>
            array (
                'id' => 66,
                'name' => 'GNF',
                'symbol' => 'Fr',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            66 =>
            array (
                'id' => 67,
                'name' => 'GYD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            67 =>
            array (
                'id' => 68,
                'name' => 'HTG',
                'symbol' => 'G',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            68 =>
            array (
                'id' => 69,
                'name' => 'HNL',
                'symbol' => 'L',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            69 =>
            array (
                'id' => 70,
                'name' => 'HKD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            70 =>
            array (
                'id' => 71,
                'name' => 'HUF',
                'symbol' => 'Ft',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            71 =>
            array (
                'id' => 72,
                'name' => 'ISK',
                'symbol' => 'kr',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            72 =>
            array (
                'id' => 73,
                'name' => 'IDR',
                'symbol' => 'Rp',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            73 =>
            array (
                'id' => 74,
                'name' => 'IRR',
                'symbol' => 'Rls',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            74 =>
            array (
                'id' => 75,
                'name' => 'IQD',
                'symbol' => 'ID',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            75 =>
            array (
                'id' => 76,
                'name' => 'ILS',
                'symbol' => '₪',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            76 =>
            array (
                'id' => 77,
                'name' => 'JMD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            77 =>
            array (
                'id' => 78,
                'name' => 'JPY',
                'symbol' => '¥',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            78 =>
            array (
                'id' => 79,
                'name' => 'JOD',
                'symbol' => 'JD',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            79 =>
            array (
                'id' => 80,
                'name' => 'KZT',
                'symbol' => '₸',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            80 =>
            array (
                'id' => 81,
                'name' => 'KES',
                'symbol' => 'Shs',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            82 =>
            array (
                'id' => 83,
                'name' => 'KPW',
                'symbol' => '₩',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            83 =>
            array (
                'id' => 84,
                'name' => 'KRW',
                'symbol' => '₩',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            84 =>
            array (
                'id' => 85,
                'name' => 'KWD',
                'symbol' => 'KD',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            85 =>
            array (
                'id' => 86,
                'name' => 'KGS',
                'symbol' => 'som',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            86 =>
            array (
                'id' => 87,
                'name' => 'LAK',
                'symbol' => '₭',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            87 =>
            array (
                'id' => 88,
                'name' => 'LBP',
                'symbol' => 'LL',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            88 =>
            array (
                'id' => 89,
                'name' => 'LSL',
                'symbol' => 'M',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            89 =>
            array (
                'id' => 90,
                'name' => 'ZAR',
                'symbol' => 'R',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            90 =>
            array (
                'id' => 91,
                'name' => 'LRD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            91 =>
            array (
                'id' => 92,
                'name' => 'LYD',
                'symbol' => 'LD',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            92 =>
            array (
                'id' => 93,
                'name' => 'CHF',
                'symbol' => 'Fr',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            93 =>
            array (
                'id' => 94,
                'name' => 'MOP',
                'symbol' => 'MOP$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            94 =>
            array (
                'id' => 95,
                'name' => 'MGA',
                'symbol' => 'Ar',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            95 =>
            array (
                'id' => 96,
                'name' => 'MWK',
                'symbol' => 'K',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            96 =>
            array (
                'id' => 97,
                'name' => 'MYR',
                'symbol' => 'RM',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            97 =>
            array (
                'id' => 98,
                'name' => 'MVR',
                'symbol' => 'Rf',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            98 =>
            array (
                'id' => 99,
                'name' => 'MRU',
                'symbol' => 'UM',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            99 =>
            array (
                'id' => 100,
                'name' => 'MUR',
                'symbol' => 'Rs',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            100 =>
            array (
                'id' => 101,
                'name' => 'MXN',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            101 =>
            array (
                'id' => 102,
                'name' => 'MDL',
                'symbol' => 'Lei',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            102 =>
            array (
                'id' => 103,
                'name' => 'MNT',
                'symbol' => '₮',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            103 =>
            array (
                'id' => 104,
                'name' => 'MAD',
                'symbol' => 'DH',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            104 =>
            array (
                'id' => 105,
                'name' => 'MZN',
                'symbol' => 'Mt',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            105 =>
            array (
                'id' => 106,
                'name' => 'MMK',
                'symbol' => 'Ks',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            106 =>
            array (
                'id' => 107,
                'name' => 'NAD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            107 =>
            array (
                'id' => 108,
                'name' => 'NPR',
                'symbol' => 'Rs',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            108 =>
            array (
                'id' => 109,
                'name' => 'NIO',
                'symbol' => 'C$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            109 =>
            array (
                'id' => 110,
                'name' => 'NGN',
                'symbol' => '₦',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            110 =>
            array (
                'id' => 111,
                'name' => 'MKD',
                'symbol' => 'DEN',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            111 =>
            array (
                'id' => 112,
                'name' => 'TRY',
                'symbol' => '₺',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            112 =>
            array (
                'id' => 113,
                'name' => 'NOK',
                'symbol' => 'kr',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            113 =>
            array (
                'id' => 114,
                'name' => 'OMR',
                'symbol' => 'RO',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            114 =>
            array (
                'id' => 115,
                'name' => 'PKR',
                'symbol' => 'Rs',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            115 =>
            array (
                'id' => 116,
                'name' => 'ILS',
                'symbol' => '₪',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            116 =>
            array (
                'id' => 117,
                'name' => 'PAB',
                'symbol' => 'B/',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            117 =>
            array (
                'id' => 118,
                'name' => 'PGK',
                'symbol' => 'K',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            118 =>
            array (
                'id' => 119,
                'name' => 'PYG',
                'symbol' => '₲',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            119 =>
            array (
                'id' => 120,
                'name' => 'PEN',
                'symbol' => 'S/',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            120 =>
            array (
                'id' => 121,
                'name' => 'PHP',
                'symbol' => '₱',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            121 =>
            array (
                'id' => 122,
                'name' => 'PLN',
                'symbol' => 'zł',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            122 =>
            array (
                'id' => 123,
                'name' => 'QAR',
                'symbol' => 'QR',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            123 =>
            array (
                'id' => 124,
                'name' => 'RON',
                'symbol' => 'Lei',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            124 =>
            array (
                'id' => 125,
                'name' => 'RWF',
                'symbol' => 'Fr',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            125 =>
            array (
                'id' => 126,
                'name' => 'WST',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            126 =>
            array (
                'id' => 127,
                'name' => 'STN',
                'symbol' => 'Db',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            127 =>
            array (
                'id' => 128,
                'name' => 'SAR',
                'symbol' => 'Rls',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            128 =>
            array (
                'id' => 129,
                'name' => 'RSD',
                'symbol' => 'DIN',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            129 =>
            array (
                'id' => 130,
                'name' => 'SCR',
                'symbol' => 'Rs',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            130 =>
            array (
                'id' => 131,
                'name' => 'SLE',
                'symbol' => 'Le',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            131 =>
            array (
                'id' => 132,
                'name' => 'SBD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            132 =>
            array (
                'id' => 133,
                'name' => 'SOS',
                'symbol' => 'Shs',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            133 =>
            array (
                'id' => 134,
                'name' => 'LKR',
                'symbol' => 'Rs',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            134 =>
            array (
                'id' => 135,
                'name' => 'SDG',
                'symbol' => 'LS',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            135 =>
            array (
                'id' => 136,
                'name' => 'SRD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            136 =>
            array (
                'id' => 137,
                'name' => 'SEK',
                'symbol' => 'kr',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            137 =>
            array (
                'id' => 138,
                'name' => 'SYP',
                'symbol' => 'LS',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            138 =>
            array (
                'id' => 139,
                'name' => 'TWD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            139 =>
            array (
                'id' => 140,
                'name' => 'TJS',
                'symbol' => 'TJS',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            140 =>
            array (
                'id' => 141,
                'name' => 'TZS',
                'symbol' => 'Shs',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            141 =>
            array (
                'id' => 142,
                'name' => 'THB',
                'symbol' => '฿',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            142 =>
            array (
                'id' => 143,
                'name' => 'TOP',
                'symbol' => 'T$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            143 =>
            array (
                'id' => 144,
                'name' => 'TTD',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            144 =>
            array (
                'id' => 145,
                'name' => 'TND',
                'symbol' => 'DT',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            145 =>
            array (
                'id' => 146,
                'name' => 'TMT',
                'symbol' => 'm',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            146 =>
            array (
                'id' => 147,
                'name' => 'UGX',
                'symbol' => 'Shs',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            147 =>
            array (
                'id' => 148,
                'name' => 'UAH',
                'symbol' => '₴',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            148 =>
            array (
                'id' => 149,
                'name' => 'AED',
                'symbol' => 'Dhs',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            149 =>
            array (
                'id' => 150,
                'name' => 'UYU',
                'symbol' => '$',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            150 =>
            array (
                'id' => 151,
                'name' => 'UZS',
                'symbol' => 'soum',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            151 =>
            array (
                'id' => 152,
                'name' => 'VUV',
                'symbol' => 'VT',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            152 =>
            array (
                'id' => 153,
                'name' => 'VES',
                'symbol' => 'Bs.S',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            153 =>
            array (
                'id' => 154,
                'name' => 'VED',
                'symbol' => 'Bs.D',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            154 =>
            array (
                'id' => 155,
                'name' => 'VND',
                'symbol' => '₫',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            155 =>
            array (
                'id' => 156,
                'name' => 'YER',
                'symbol' => 'Rls',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
            156 =>
            array (
                'id' => 157,
                'name' => 'ZMW',
                'symbol' => 'K',
                'exchange_rate' => NULL,
                'exchange_from' => NULL,
            ),
        ));


    }
}
