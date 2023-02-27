<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ObjectFilesTableWithoutDummyDataSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('object_files')->delete();

        \DB::table('object_files')->insert(array (
            0 =>
            array (
                'id' => 2,
                'object_type' => 'theme_options',
                'object_id' => 1,
                'file_id' => 579,
            ),
            1 =>
            array (
                'id' => 3,
                'object_type' => 'theme_options',
                'object_id' => 4,
                'file_id' => 576,
            ),
            2 =>
            array (
                'id' => 4,
                'object_type' => 'theme_options',
                'object_id' => 2,
                'file_id' => 577,
            ),
            3 =>
            array (
                'id' => 5,
                'object_type' => 'theme_options',
                'object_id' => 3,
                'file_id' => 578,
            ),
            4 =>
            array (
                'id' => 6,
                'object_type' => 'theme_options',
                'object_id' => 11,
                'file_id' => 580,
            ),
            22 =>
            array (
                'id' => 25,
                'object_type' => 'slides',
                'object_id' => 1,
                'file_id' => 1127,
            ),
            23 =>
            array (
                'id' => 26,
                'object_type' => 'slides',
                'object_id' => 2,
                'file_id' => 603,
            ),
            24 =>
            array (
                'id' => 27,
                'object_type' => 'slides',
                'object_id' => 3,
                'file_id' => 606,
            ),
            25 =>
            array (
                'id' => 28,
                'object_type' => 'slides',
                'object_id' => 4,
                'file_id' => 1112,
            ),
            35 =>
            array (
                'id' => 38,
                'object_type' => 'theme_options',
                'object_id' => 15,
                'file_id' => 651,
            ),
            36 =>
            array (
                'id' => 39,
                'object_type' => 'theme_options',
                'object_id' => 16,
                'file_id' => 653,
            ),
            37 =>
            array (
                'id' => 40,
                'object_type' => 'theme_options',
                'object_id' => 17,
                'file_id' => 652,
            ),
            38 =>
            array (
                'id' => 42,
                'object_type' => 'users',
                'object_id' => 1,
                'file_id' => 667,
            ),
            93 =>
            array (
                'id' => 97,
                'object_type' => 'vendors_meta',
                'object_id' => 2,
                'file_id' => 733,
            ),
            94 =>
            array (
                'id' => 98,
                'object_type' => 'vendors_meta',
                'object_id' => 3,
                'file_id' => 732,
            ),
            107 =>
            array (
                'id' => 111,
                'object_type' => 'theme_options',
                'object_id' => 19,
                'file_id' => 797,
            ),
            108 =>
            array (
                'id' => 112,
                'object_type' => 'theme_options',
                'object_id' => 20,
                'file_id' => 577,
            ),
            109 =>
            array (
                'id' => 113,
                'object_type' => 'theme_options',
                'object_id' => 21,
                'file_id' => 578,
            ),
            110 =>
            array (
                'id' => 114,
                'object_type' => 'theme_options',
                'object_id' => 22,
                'file_id' => 576,
            ),
            111 =>
            array (
                'id' => 115,
                'object_type' => 'theme_options',
                'object_id' => 28,
                'file_id' => 796,
            ),
            112 =>
            array (
                'id' => 116,
                'object_type' => 'theme_options',
                'object_id' => 32,
                'file_id' => 651,
            ),
            113 =>
            array (
                'id' => 117,
                'object_type' => 'theme_options',
                'object_id' => 33,
                'file_id' => 653,
            ),
            114 =>
            array (
                'id' => 118,
                'object_type' => 'theme_options',
                'object_id' => 34,
                'file_id' => 652,
            ),
            115 =>
            array (
                'id' => 119,
                'object_type' => 'theme_options',
                'object_id' => 36,
                'file_id' => 799,
            ),
            116 =>
            array (
                'id' => 120,
                'object_type' => 'theme_options',
                'object_id' => 37,
                'file_id' => 577,
            ),
            117 =>
            array (
                'id' => 121,
                'object_type' => 'theme_options',
                'object_id' => 38,
                'file_id' => 578,
            ),
            118 =>
            array (
                'id' => 122,
                'object_type' => 'theme_options',
                'object_id' => 39,
                'file_id' => 576,
            ),
            119 =>
            array (
                'id' => 123,
                'object_type' => 'theme_options',
                'object_id' => 45,
                'file_id' => 798,
            ),
            120 =>
            array (
                'id' => 124,
                'object_type' => 'theme_options',
                'object_id' => 49,
                'file_id' => 651,
            ),
            121 =>
            array (
                'id' => 125,
                'object_type' => 'theme_options',
                'object_id' => 50,
                'file_id' => 653,
            ),
            122 =>
            array (
                'id' => 126,
                'object_type' => 'theme_options',
                'object_id' => 51,
                'file_id' => 652,
            ),
            123 =>
            array (
                'id' => 127,
                'object_type' => 'theme_options',
                'object_id' => 53,
                'file_id' => 795,
            ),
            124 =>
            array (
                'id' => 128,
                'object_type' => 'theme_options',
                'object_id' => 54,
                'file_id' => 577,
            ),
            125 =>
            array (
                'id' => 129,
                'object_type' => 'theme_options',
                'object_id' => 55,
                'file_id' => 578,
            ),
            126 =>
            array (
                'id' => 130,
                'object_type' => 'theme_options',
                'object_id' => 56,
                'file_id' => 576,
            ),
            127 =>
            array (
                'id' => 131,
                'object_type' => 'theme_options',
                'object_id' => 62,
                'file_id' => 794,
            ),
            128 =>
            array (
                'id' => 132,
                'object_type' => 'theme_options',
                'object_id' => 66,
                'file_id' => 651,
            ),
            129 =>
            array (
                'id' => 133,
                'object_type' => 'theme_options',
                'object_id' => 67,
                'file_id' => 653,
            ),
            130 =>
            array (
                'id' => 134,
                'object_type' => 'theme_options',
                'object_id' => 68,
                'file_id' => 652,
            ),
            131 =>
            array (
                'id' => 135,
                'object_type' => 'slides',
                'object_id' => 5,
                'file_id' => 768,
            ),
            132 =>
            array (
                'id' => 136,
                'object_type' => 'slides',
                'object_id' => 6,
                'file_id' => 769,
            ),
            133 =>
            array (
                'id' => 137,
                'object_type' => 'slides',
                'object_id' => 7,
                'file_id' => 770,
            ),
            134 =>
            array (
                'id' => 138,
                'object_type' => 'slides',
                'object_id' => 8,
                'file_id' => 771,
            ),
            135 =>
            array (
                'id' => 139,
                'object_type' => 'slides',
                'object_id' => 9,
                'file_id' => 772,
            ),
            136 =>
            array (
                'id' => 140,
                'object_type' => 'slides',
                'object_id' => 10,
                'file_id' => 773,
            ),
            137 =>
            array (
                'id' => 141,
                'object_type' => 'slides',
                'object_id' => 11,
                'file_id' => 774,
            ),
            138 =>
            array (
                'id' => 142,
                'object_type' => 'slides',
                'object_id' => 12,
                'file_id' => 775,
            ),
            139 =>
            array (
                'id' => 143,
                'object_type' => 'slides',
                'object_id' => 13,
                'file_id' => 776,
            ),
            140 =>
            array (
                'id' => 144,
                'object_type' => 'slides',
                'object_id' => 15,
                'file_id' => 777,
            ),
            141 =>
            array (
                'id' => 145,
                'object_type' => 'slides',
                'object_id' => 16,
                'file_id' => 778,
            ),
            142 =>
            array (
                'id' => 146,
                'object_type' => 'slides',
                'object_id' => 17,
                'file_id' => 779,
            ),
            143 =>
            array (
                'id' => 147,
                'object_type' => 'slides',
                'object_id' => 18,
                'file_id' => 780,
            ),
            144 =>
            array (
                'id' => 148,
                'object_type' => 'slides',
                'object_id' => 19,
                'file_id' => 781,
            ),
            145 =>
            array (
                'id' => 149,
                'object_type' => 'slides',
                'object_id' => 20,
                'file_id' => 782,
            ),
            146 =>
            array (
                'id' => 150,
                'object_type' => 'slides',
                'object_id' => 21,
                'file_id' => 783,
            ),
            147 =>
            array (
                'id' => 151,
                'object_type' => 'slides',
                'object_id' => 22,
                'file_id' => 784,
            ),
            148 =>
            array (
                'id' => 152,
                'object_type' => 'slides',
                'object_id' => 23,
                'file_id' => 785,
            ),
            149 =>
            array (
                'id' => 153,
                'object_type' => 'slides',
                'object_id' => 24,
                'file_id' => 786,
            ),
            150 =>
            array (
                'id' => 154,
                'object_type' => 'preferences',
                'object_id' => 48,
                'file_id' => 792,
            ),
            151 =>
            array (
                'id' => 155,
                'object_type' => 'preferences',
                'object_id' => 47,
                'file_id' => 793,
            ),
            152 =>
            array (
                'id' => 156,
                'object_type' => 'users',
                'object_id' => 20,
                'file_id' => 1062,
            ),
            153 =>
            array (
                'id' => 157,
                'object_type' => 'users',
                'object_id' => 21,
                'file_id' => 1063,
            ),
            154 =>
            array (
                'id' => 158,
                'object_type' => 'vendors_meta',
                'object_id' => 24,
                'file_id' => 801,
            ),
            155 =>
            array (
                'id' => 159,
                'object_type' => 'theme_options',
                'object_id' => 70,
                'file_id' => 987,
            ),
            156 =>
            array (
                'id' => 160,
                'object_type' => 'theme_options',
                'object_id' => 71,
                'file_id' => 577,
            ),
            157 =>
            array (
                'id' => 161,
                'object_type' => 'theme_options',
                'object_id' => 72,
                'file_id' => 578,
            ),
            158 =>
            array (
                'id' => 162,
                'object_type' => 'theme_options',
                'object_id' => 73,
                'file_id' => 576,
            ),
            159 =>
            array (
                'id' => 163,
                'object_type' => 'theme_options',
                'object_id' => 79,
                'file_id' => 986,
            ),
            160 =>
            array (
                'id' => 164,
                'object_type' => 'theme_options',
                'object_id' => 83,
                'file_id' => 651,
            ),
            161 =>
            array (
                'id' => 165,
                'object_type' => 'theme_options',
                'object_id' => 84,
                'file_id' => 653,
            ),
            162 =>
            array (
                'id' => 166,
                'object_type' => 'theme_options',
                'object_id' => 85,
                'file_id' => 652,
            ),
            163 =>
            array (
                'id' => 167,
                'object_type' => 'slides',
                'object_id' => 25,
                'file_id' => 993,
            ),
            164 =>
            array (
                'id' => 168,
                'object_type' => 'slides',
                'object_id' => 26,
                'file_id' => 994,
            ),
            165 =>
            array (
                'id' => 169,
                'object_type' => 'slides',
                'object_id' => 27,
                'file_id' => 995,
            ),
            166 =>
            array (
                'id' => 170,
                'object_type' => 'slides',
                'object_id' => 28,
                'file_id' => 996,
            ),
            167 =>
            array (
                'id' => 171,
                'object_type' => 'slides',
                'object_id' => 29,
                'file_id' => 997,
            ),
            168 =>
            array (
                'id' => 172,
                'object_type' => 'slides',
                'object_id' => 30,
                'file_id' => 1023,
            ),
            169 =>
            array (
                'id' => 173,
                'object_type' => 'slides',
                'object_id' => 31,
                'file_id' => 1024,
            ),
            170 =>
            array (
                'id' => 174,
                'object_type' => 'slides',
                'object_id' => 32,
                'file_id' => 1025,
            ),
            171 =>
            array (
                'id' => 175,
                'object_type' => 'theme_options',
                'object_id' => 92,
                'file_id' => 579,
            ),
            172 =>
            array (
                'id' => 179,
                'object_type' => 'theme_options',
                'object_id' => 101,
                'file_id' => 580,
            ),
            173 =>
            array (
                'id' => 180,
                'object_type' => 'theme_options',
                'object_id' => 105,
                'file_id' => 651,
            ),
            174 =>
            array (
                'id' => 181,
                'object_type' => 'theme_options',
                'object_id' => 106,
                'file_id' => 653,
            ),
            175 =>
            array (
                'id' => 182,
                'object_type' => 'theme_options',
                'object_id' => 107,
                'file_id' => 652,
            ),
            176 =>
            array (
                'id' => 183,
                'object_type' => 'slides',
                'object_id' => 33,
                'file_id' => 1026,
            ),
            177 =>
            array (
                'id' => 184,
                'object_type' => 'slides',
                'object_id' => 34,
                'file_id' => 1027,
            ),
            178 =>
            array (
                'id' => 185,
                'object_type' => 'slides',
                'object_id' => 35,
                'file_id' => 1028,
            ),
            179 =>
            array (
                'id' => 186,
                'object_type' => 'slides',
                'object_id' => 36,
                'file_id' => 1029,
            ),
            180 =>
            array (
                'id' => 187,
                'object_type' => 'slides',
                'object_id' => 37,
                'file_id' => 1030,
            ),
            181 =>
            array (
                'id' => 188,
                'object_type' => 'theme_options',
                'object_id' => 110,
                'file_id' => 1032,
            ),
            182 =>
            array (
                'id' => 191,
                'object_type' => 'theme_options',
                'object_id' => 113,
                'file_id' => 576,
            ),
            183 =>
            array (
                'id' => 192,
                'object_type' => 'theme_options',
                'object_id' => 119,
                'file_id' => 1031,
            ),
            184 =>
            array (
                'id' => 193,
                'object_type' => 'theme_options',
                'object_id' => 123,
                'file_id' => 651,
            ),
            185 =>
            array (
                'id' => 194,
                'object_type' => 'theme_options',
                'object_id' => 124,
                'file_id' => 653,
            ),
            186 =>
            array (
                'id' => 195,
                'object_type' => 'theme_options',
                'object_id' => 125,
                'file_id' => 652,
            ),
            187 =>
            array (
                'id' => 196,
                'object_type' => 'slides',
                'object_id' => 38,
                'file_id' => 1033,
            ),
            188 =>
            array (
                'id' => 197,
                'object_type' => 'slides',
                'object_id' => 39,
                'file_id' => 1034,
            ),
            189 =>
            array (
                'id' => 198,
                'object_type' => 'slides',
                'object_id' => 40,
                'file_id' => 1035,
            ),
            190 =>
            array (
                'id' => 199,
                'object_type' => 'slides',
                'object_id' => 41,
                'file_id' => 1036,
            ),
            191 =>
            array (
                'id' => 200,
                'object_type' => 'slides',
                'object_id' => 42,
                'file_id' => 1037,
            ),
            192 =>
            array (
                'id' => 201,
                'object_type' => 'theme_options',
                'object_id' => 129,
                'file_id' => 1032,
            ),
            193 =>
            array (
                'id' => 204,
                'object_type' => 'theme_options',
                'object_id' => 132,
                'file_id' => 576,
            ),
            194 =>
            array (
                'id' => 205,
                'object_type' => 'theme_options',
                'object_id' => 138,
                'file_id' => 580,
            ),
            195 =>
            array (
                'id' => 206,
                'object_type' => 'theme_options',
                'object_id' => 142,
                'file_id' => 651,
            ),
            196 =>
            array (
                'id' => 207,
                'object_type' => 'theme_options',
                'object_id' => 143,
                'file_id' => 653,
            ),
            197 =>
            array (
                'id' => 208,
                'object_type' => 'theme_options',
                'object_id' => 144,
                'file_id' => 652,
            ),
            198 =>
            array (
                'id' => 209,
                'object_type' => 'slides',
                'object_id' => 43,
                'file_id' => 1068,
            ),
            199 =>
            array (
                'id' => 210,
                'object_type' => 'slides',
                'object_id' => 44,
                'file_id' => 1069,
            ),
            200 =>
            array (
                'id' => 211,
                'object_type' => 'slides',
                'object_id' => 45,
                'file_id' => 1070,
            ),
            201 =>
            array (
                'id' => 212,
                'object_type' => 'theme_options',
                'object_id' => 147,
                'file_id' => 1071,
            ),
            202 =>
            array (
                'id' => 216,
                'object_type' => 'theme_options',
                'object_id' => 156,
                'file_id' => 1071,
            ),
            203 =>
            array (
                'id' => 217,
                'object_type' => 'theme_options',
                'object_id' => 160,
                'file_id' => 651,
            ),
            204 =>
            array (
                'id' => 218,
                'object_type' => 'theme_options',
                'object_id' => 161,
                'file_id' => 653,
            ),
            205 =>
            array (
                'id' => 219,
                'object_type' => 'theme_options',
                'object_id' => 162,
                'file_id' => 652,
            ),
            206 =>
            array (
                'id' => 220,
                'object_type' => 'slides',
                'object_id' => 46,
                'file_id' => 1072,
            ),
            207 =>
            array (
                'id' => 222,
                'object_type' => 'slides',
                'object_id' => 47,
                'file_id' => 1074,
            ),
        ));


    }
}
