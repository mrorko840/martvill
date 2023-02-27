<?php

namespace Modules\CMS\Database\Seeders;

use Illuminate\Database\Seeder;

class ComponentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('components')->delete();

        \DB::table('components')->insert(array (
            0 =>
            array (
                'id' => 2,
                'page_id' => 5,
                'layout_id' => 5,
                'level' => 2,
            ),
            1 =>
            array (
                'id' => 3,
                'page_id' => 5,
                'layout_id' => 2,
                'level' => 3,
            ),
            2 =>
            array (
                'id' => 4,
                'page_id' => 5,
                'layout_id' => 2,
                'level' => 6,
            ),
            3 =>
            array (
                'id' => 6,
                'page_id' => 5,
                'layout_id' => 1,
                'level' => 7,
            ),
            4 =>
            array (
                'id' => 15,
                'page_id' => 5,
                'layout_id' => 4,
                'level' => 8,
            ),
            5 =>
            array (
                'id' => 16,
                'page_id' => 5,
                'layout_id' => 3,
                'level' => 9,
            ),
            6 =>
            array (
                'id' => 17,
                'page_id' => 5,
                'layout_id' => 2,
                'level' => 10,
            ),
            7 =>
            array (
                'id' => 18,
                'page_id' => 5,
                'layout_id' => 6,
                'level' => 13,
            ),
            8 =>
            array (
                'id' => 19,
                'page_id' => 5,
                'layout_id' => 8,
                'level' => 1,
            ),
            9 =>
            array (
                'id' => 20,
                'page_id' => 7,
                'layout_id' => 10,
                'level' => 1,
            ),
            10 =>
            array (
                'id' => 21,
                'page_id' => 8,
                'layout_id' => 10,
                'level' => 1,
            ),
            11 =>
            array (
                'id' => 22,
                'page_id' => 7,
                'layout_id' => 4,
                'level' => 2,
            ),
            12 =>
            array (
                'id' => 23,
                'page_id' => 7,
                'layout_id' => 5,
                'level' => 3,
            ),
            13 =>
            array (
                'id' => 25,
                'page_id' => 7,
                'layout_id' => 2,
                'level' => 5,
            ),
            14 =>
            array (
                'id' => 26,
                'page_id' => 7,
                'layout_id' => 4,
                'level' => 4,
            ),
            15 =>
            array (
                'id' => 27,
                'page_id' => 7,
                'layout_id' => 2,
                'level' => 6,
            ),
            16 =>
            array (
                'id' => 28,
                'page_id' => 7,
                'layout_id' => 10,
                'level' => 7,
            ),
            17 =>
            array (
                'id' => 29,
                'page_id' => 7,
                'layout_id' => 2,
                'level' => 8,
            ),
            18 =>
            array (
                'id' => 30,
                'page_id' => 7,
                'layout_id' => 7,
                'level' => 9,
            ),
            19 =>
            array (
                'id' => 31,
                'page_id' => 6,
                'layout_id' => 10,
                'level' => 1,
            ),
            20 =>
            array (
                'id' => 32,
                'page_id' => 6,
                'layout_id' => 4,
                'level' => 2,
            ),
            21 =>
            array (
                'id' => 33,
                'page_id' => 6,
                'layout_id' => 8,
                'level' => 3,
            ),
            22 =>
            array (
                'id' => 34,
                'page_id' => 6,
                'layout_id' => 5,
                'level' => 4,
            ),
            23 =>
            array (
                'id' => 35,
                'page_id' => 6,
                'layout_id' => 2,
                'level' => 5,
            ),
            24 =>
            array (
                'id' => 36,
                'page_id' => 6,
                'layout_id' => 1,
                'level' => 6,
            ),
            25 =>
            array (
                'id' => 38,
                'page_id' => 6,
                'layout_id' => 4,
                'level' => 7,
            ),
            26 =>
            array (
                'id' => 39,
                'page_id' => 6,
                'layout_id' => 2,
                'level' => 8,
            ),
            27 =>
            array (
                'id' => 40,
                'page_id' => 6,
                'layout_id' => 4,
                'level' => 9,
            ),
            28 =>
            array (
                'id' => 41,
                'page_id' => 6,
                'layout_id' => 6,
                'level' => 10,
            ),
            29 =>
            array (
                'id' => 42,
                'page_id' => 6,
                'layout_id' => 7,
                'level' => 11,
            ),
            30 =>
            array (
                'id' => 43,
                'page_id' => 6,
                'layout_id' => 9,
                'level' => 12,
            ),
            31 =>
            array (
                'id' => 44,
                'page_id' => 8,
                'layout_id' => 5,
                'level' => 2,
            ),
            32 =>
            array (
                'id' => 45,
                'page_id' => 8,
                'layout_id' => 4,
                'level' => 3,
            ),
            33 =>
            array (
                'id' => 46,
                'page_id' => 8,
                'layout_id' => 2,
                'level' => 4,
            ),
            34 =>
            array (
                'id' => 47,
                'page_id' => 8,
                'layout_id' => 10,
                'level' => 5,
            ),
            35 =>
            array (
                'id' => 48,
                'page_id' => 8,
                'layout_id' => 2,
                'level' => 6,
            ),
            36 =>
            array (
                'id' => 49,
                'page_id' => 8,
                'layout_id' => 4,
                'level' => 7,
            ),
            37 =>
            array (
                'id' => 50,
                'page_id' => 8,
                'layout_id' => 2,
                'level' => 8,
            ),
            38 =>
            array (
                'id' => 51,
                'page_id' => 8,
                'layout_id' => 2,
                'level' => 9,
            ),
            39 =>
            array (
                'id' => 52,
                'page_id' => 8,
                'layout_id' => 6,
                'level' => 10,
            ),
            40 =>
            array (
                'id' => 53,
                'page_id' => 8,
                'layout_id' => 8,
                'level' => 11,
            ),
            41 =>
            array (
                'id' => 54,
                'page_id' => 10,
                'layout_id' => 4,
                'level' => 2,
            ),
            42 =>
            array (
                'id' => 55,
                'page_id' => 10,
                'layout_id' => 3,
                'level' => 3,
            ),
            43 =>
            array (
                'id' => 56,
                'page_id' => 10,
                'layout_id' => 2,
                'level' => 5,
            ),
            44 =>
            array (
                'id' => 57,
                'page_id' => 10,
                'layout_id' => 8,
                'level' => 6,
            ),
            45 =>
            array (
                'id' => 58,
                'page_id' => 10,
                'layout_id' => 7,
                'level' => 7,
            ),
            46 =>
            array (
                'id' => 59,
                'page_id' => 10,
                'layout_id' => 10,
                'level' => 1,
            ),
            47 =>
            array (
                'id' => 60,
                'page_id' => 10,
                'layout_id' => 10,
                'level' => 4,
            ),
            48 =>
            array (
                'id' => 61,
                'page_id' => 11,
                'layout_id' => 10,
                'level' => 1,
            ),
            49 =>
            array (
                'id' => 62,
                'page_id' => 11,
                'layout_id' => 2,
                'level' => 2,
            ),
            50 =>
            array (
                'id' => 63,
                'page_id' => 11,
                'layout_id' => 10,
                'level' => 3,
            ),
            51 =>
            array (
                'id' => 64,
                'page_id' => 11,
                'layout_id' => 2,
                'level' => 4,
            ),
            52 =>
            array (
                'id' => 65,
                'page_id' => 11,
                'layout_id' => 2,
                'level' => 6,
            ),
            53 =>
            array (
                'id' => 66,
                'page_id' => 11,
                'layout_id' => 10,
                'level' => 5,
            ),
            54 =>
            array (
                'id' => 67,
                'page_id' => 11,
                'layout_id' => 10,
                'level' => 7,
            ),
            55 =>
            array (
                'id' => 68,
                'page_id' => 11,
                'layout_id' => 7,
                'level' => 8,
            ),
            56 =>
            array (
                'id' => 69,
                'page_id' => 11,
                'layout_id' => 10,
                'level' => 9,
            ),
            57 =>
            array (
                'id' => 70,
                'page_id' => 11,
                'layout_id' => 9,
                'level' => 10,
            ),
            58 =>
            array (
                'id' => 71,
                'page_id' => 12,
                'layout_id' => 10,
                'level' => 1,
            ),
            59 =>
            array (
                'id' => 72,
                'page_id' => 12,
                'layout_id' => 4,
                'level' => 2,
            ),
            60 =>
            array (
                'id' => 73,
                'page_id' => 12,
                'layout_id' => 2,
                'level' => 3,
            ),
            61 =>
            array (
                'id' => 74,
                'page_id' => 12,
                'layout_id' => 10,
                'level' => 4,
            ),
            62 =>
            array (
                'id' => 75,
                'page_id' => 12,
                'layout_id' => 4,
                'level' => 5,
            ),
            63 =>
            array (
                'id' => 77,
                'page_id' => 12,
                'layout_id' => 7,
                'level' => 8,
            ),
            64 =>
            array (
                'id' => 78,
                'page_id' => 12,
                'layout_id' => 10,
                'level' => 9,
            ),
            65 =>
            array (
                'id' => 79,
                'page_id' => 12,
                'layout_id' => 2,
                'level' => 7,
            ),
            66 =>
            array (
                'id' => 80,
                'page_id' => 13,
                'layout_id' => 10,
                'level' => 1,
            ),
            67 =>
            array (
                'id' => 81,
                'page_id' => 13,
                'layout_id' => 11,
                'level' => 2,
            ),
            68 =>
            array (
                'id' => 82,
                'page_id' => 13,
                'layout_id' => 2,
                'level' => 3,
            ),
            69 =>
            array (
                'id' => 83,
                'page_id' => 13,
                'layout_id' => 4,
                'level' => 4,
            ),
            70 =>
            array (
                'id' => 84,
                'page_id' => 13,
                'layout_id' => 2,
                'level' => 5,
            ),
            71 =>
            array (
                'id' => 85,
                'page_id' => 13,
                'layout_id' => 4,
                'level' => 6,
            ),
            72 =>
            array (
                'id' => 86,
                'page_id' => 14,
                'layout_id' => 10,
                'level' => 1,
            ),
            73 =>
            array (
                'id' => 87,
                'page_id' => 14,
                'layout_id' => 10,
                'level' => 5,
            ),
            74 =>
            array (
                'id' => 88,
                'page_id' => 14,
                'layout_id' => 5,
                'level' => 2,
            ),
            75 =>
            array (
                'id' => 89,
                'page_id' => 14,
                'layout_id' => 2,
                'level' => 3,
            ),
            76 =>
            array (
                'id' => 90,
                'page_id' => 14,
                'layout_id' => 4,
                'level' => 4,
            ),
            77 =>
            array (
                'id' => 91,
                'page_id' => 14,
                'layout_id' => 2,
                'level' => 6,
            ),
            78 =>
            array (
                'id' => 92,
                'page_id' => 14,
                'layout_id' => 4,
                'level' => 7,
            ),
            79 =>
            array (
                'id' => 93,
                'page_id' => 14,
                'layout_id' => 7,
                'level' => 8,
            ),
            80 =>
            array (
                'id' => 94,
                'page_id' => 14,
                'layout_id' => 9,
                'level' => 9,
            ),
            81 =>
            array (
                'id' => 95,
                'page_id' => 5,
                'layout_id' => 2,
                'level' => 4,
            ),
            82 =>
            array (
                'id' => 96,
                'page_id' => 5,
                'layout_id' => 2,
                'level' => 5,
            ),
            83 =>
            array (
                'id' => 97,
                'page_id' => 5,
                'layout_id' => 4,
                'level' => 11,
            ),
            84 =>
            array (
                'id' => 98,
                'page_id' => 5,
                'layout_id' => 2,
                'level' => 12,
            ),
            85 =>
            array (
                'id' => 99,
                'page_id' => 5,
                'layout_id' => 7,
                'level' => 14,
            ),
        ));
    }
}
