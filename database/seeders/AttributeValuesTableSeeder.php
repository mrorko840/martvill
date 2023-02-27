<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attribute_values')->delete();
        
        \DB::table('attribute_values')->insert(array (
            0 => 
            array (
                'id' => 24,
                'attribute_id' => 26,
                'value' => 'Blue',
                'order_by' => 1,
                'status' => 'Active',
            ),
            1 => 
            array (
                'id' => 25,
                'attribute_id' => 26,
                'value' => 'Grey',
                'order_by' => 2,
                'status' => 'Active',
            ),
            2 => 
            array (
                'id' => 26,
                'attribute_id' => 26,
                'value' => 'Black',
                'order_by' => 3,
                'status' => 'Active',
            ),
            3 => 
            array (
                'id' => 27,
                'attribute_id' => 26,
                'value' => 'Pink',
                'order_by' => 4,
                'status' => 'Active',
            ),
            4 => 
            array (
                'id' => 28,
                'attribute_id' => 27,
                'value' => '2 GB',
                'order_by' => 1,
                'status' => 'Active',
            ),
            5 => 
            array (
                'id' => 29,
                'attribute_id' => 27,
                'value' => '4 GB',
                'order_by' => 2,
                'status' => 'Active',
            ),
            6 => 
            array (
                'id' => 30,
                'attribute_id' => 28,
                'value' => '32 GB',
                'order_by' => 1,
                'status' => 'Active',
            ),
            7 => 
            array (
                'id' => 31,
                'attribute_id' => 28,
                'value' => '64 GB',
                'order_by' => 2,
                'status' => 'Active',
            ),
            8 => 
            array (
                'id' => 32,
                'attribute_id' => 38,
                'value' => 'Dual Sim',
                'order_by' => 1,
                'status' => 'Active',
            ),
            9 => 
            array (
                'id' => 33,
                'attribute_id' => 38,
                'value' => 'Single Sim',
                'order_by' => 2,
                'status' => 'Active',
            ),
            10 => 
            array (
                'id' => 140,
                'attribute_id' => 281,
                'value' => '128 GB',
                'order_by' => 1,
                'status' => 'Active',
            ),
            11 => 
            array (
                'id' => 141,
                'attribute_id' => 281,
                'value' => '256 GB',
                'order_by' => 2,
                'status' => 'Active',
            ),
            12 => 
            array (
                'id' => 142,
                'attribute_id' => 281,
                'value' => '512 GB',
                'order_by' => 3,
                'status' => 'Active',
            ),
            13 => 
            array (
                'id' => 183,
                'attribute_id' => 26,
                'value' => 'Brown',
                'order_by' => 1,
                'status' => 'Active',
            ),
            14 => 
            array (
                'id' => 184,
                'attribute_id' => 30,
                'value' => 'P47',
                'order_by' => 1,
                'status' => 'Active',
            ),
            15 => 
            array (
                'id' => 185,
                'attribute_id' => 28,
                'value' => '16 GB',
                'order_by' => 1,
                'status' => 'Active',
            ),
            16 => 
            array (
                'id' => 186,
                'attribute_id' => 26,
                'value' => 'As Picture',
                'order_by' => 1,
                'status' => 'Active',
            ),
            17 => 
            array (
                'id' => 187,
                'attribute_id' => 26,
                'value' => 'Soft Amber',
                'order_by' => 1,
                'status' => 'Active',
            ),
            18 => 
            array (
                'id' => 188,
                'attribute_id' => 26,
                'value' => 'Purple',
                'order_by' => 1,
                'status' => 'Active',
            ),
            19 => 
            array (
                'id' => 189,
                'attribute_id' => 26,
                'value' => 'Vanilla',
                'order_by' => 1,
                'status' => 'Active',
            ),
            20 => 
            array (
                'id' => 190,
                'attribute_id' => 26,
                'value' => 'Brownish Pink',
                'order_by' => 1,
                'status' => 'Active',
            ),
            21 => 
            array (
                'id' => 191,
                'attribute_id' => 26,
                'value' => 'Almond',
                'order_by' => 1,
                'status' => 'Active',
            ),
            22 => 
            array (
                'id' => 192,
                'attribute_id' => 26,
                'value' => 'Bone',
                'order_by' => 1,
                'status' => 'Active',
            ),
            23 => 
            array (
                'id' => 193,
                'attribute_id' => 26,
                'value' => 'Red',
                'order_by' => 1,
                'status' => 'Active',
            ),
            24 => 
            array (
                'id' => 194,
                'attribute_id' => 26,
                'value' => 'Green',
                'order_by' => 1,
                'status' => 'Active',
            ),
            25 => 
            array (
                'id' => 195,
                'attribute_id' => 30,
                'value' => '600D',
                'order_by' => 1,
                'status' => 'Active',
            ),
            26 => 
            array (
                'id' => 196,
                'attribute_id' => 30,
                'value' => 'Vention USB Male to Female',
                'order_by' => 1,
                'status' => 'Active',
            ),
            27 => 
            array (
                'id' => 197,
                'attribute_id' => 292,
                'value' => 'USB Extension Cable',
                'order_by' => 1,
                'status' => 'Active',
            ),
            28 => 
            array (
                'id' => 198,
                'attribute_id' => 30,
                'value' => 'ORICO NVMe M.2',
                'order_by' => 1,
                'status' => 'Active',
            ),
            29 => 
            array (
                'id' => 199,
                'attribute_id' => 292,
                'value' => 'SSD Case',
                'order_by' => 1,
                'status' => 'Active',
            ),
            30 => 
            array (
                'id' => 200,
                'attribute_id' => 28,
                'value' => '256 GB',
                'order_by' => 1,
                'status' => 'Active',
            ),
            31 => 
            array (
                'id' => 201,
                'attribute_id' => 28,
                'value' => '512 GB',
                'order_by' => 1,
                'status' => 'Active',
            ),
            32 => 
            array (
                'id' => 202,
                'attribute_id' => 27,
                'value' => '2 GB at 1600MHz LPDDR3 RAM',
                'order_by' => 1,
                'status' => 'Active',
            ),
            33 => 
            array (
                'id' => 203,
                'attribute_id' => 28,
                'value' => '32GB eMMC',
                'order_by' => 1,
                'status' => 'Active',
            ),
            34 => 
            array (
                'id' => 204,
                'attribute_id' => 36,
                'value' => 'Windows',
                'order_by' => 1,
                'status' => 'Active',
            ),
            35 => 
            array (
                'id' => 205,
                'attribute_id' => 376,
                'value' => '260mAh',
                'order_by' => 1,
                'status' => 'Active',
            ),
            36 => 
            array (
                'id' => 207,
                'attribute_id' => 376,
                'value' => 'Battery life: 20 days',
                'order_by' => 1,
                'status' => 'Active',
            ),
            37 => 
            array (
                'id' => 208,
                'attribute_id' => 29,
                'value' => 'LO-25',
                'order_by' => 1,
                'status' => 'Active',
            ),
            38 => 
            array (
                'id' => 209,
                'attribute_id' => 376,
                'value' => 'Included',
                'order_by' => 1,
                'status' => 'Active',
            ),
            39 => 
            array (
                'id' => 210,
                'attribute_id' => 26,
                'value' => 'Yellow',
                'order_by' => 1,
                'status' => 'Active',
            ),
            40 => 
            array (
                'id' => 211,
                'attribute_id' => 26,
                'value' => 'White',
                'order_by' => 1,
                'status' => 'Active',
            ),
            41 => 
            array (
                'id' => 212,
                'attribute_id' => 33,
                'value' => '1.69 inch',
                'order_by' => 1,
                'status' => 'Active',
            ),
            42 => 
            array (
                'id' => 213,
                'attribute_id' => 35,
            'value' => 'TFT HD (240x280)',
                'order_by' => 1,
                'status' => 'Active',
            ),
            43 => 
            array (
                'id' => 214,
                'attribute_id' => 28,
                'value' => '128MB',
                'order_by' => 1,
                'status' => 'Active',
            ),
            44 => 
            array (
                'id' => 215,
                'attribute_id' => 29,
                'value' => 'MG.GEN0021360',
                'order_by' => 1,
                'status' => 'Active',
            ),
            45 => 
            array (
                'id' => 216,
                'attribute_id' => 292,
                'value' => 'USB 3.0 Type-A',
                'order_by' => 1,
                'status' => 'Active',
            ),
            46 => 
            array (
                'id' => 217,
                'attribute_id' => 292,
                'value' => 'Charm Bracelets',
                'order_by' => 1,
                'status' => 'Active',
            ),
            47 => 
            array (
                'id' => 218,
                'attribute_id' => 26,
                'value' => 'Powder Blue',
                'order_by' => 1,
                'status' => 'Active',
            ),
            48 => 
            array (
                'id' => 219,
                'attribute_id' => 26,
                'value' => 'Orange',
                'order_by' => 1,
                'status' => 'Active',
            ),
            49 => 
            array (
                'id' => 220,
                'attribute_id' => 341,
                'value' => 'Beboncool',
                'order_by' => 1,
                'status' => 'Active',
            ),
            50 => 
            array (
                'id' => 221,
                'attribute_id' => 26,
                'value' => 'Mango Orange',
                'order_by' => 1,
                'status' => 'Active',
            ),
            51 => 
            array (
                'id' => 222,
                'attribute_id' => 26,
                'value' => 'Pale Blue Lily',
                'order_by' => 1,
                'status' => 'Active',
            ),
            52 => 
            array (
                'id' => 223,
                'attribute_id' => 26,
                'value' => 'Sea Mist',
                'order_by' => 1,
                'status' => 'Active',
            ),
            53 => 
            array (
                'id' => 224,
                'attribute_id' => 26,
                'value' => 'Red-Orange',
                'order_by' => 1,
                'status' => 'Active',
            ),
            54 => 
            array (
                'id' => 225,
                'attribute_id' => 26,
                'value' => 'Ecru White',
                'order_by' => 1,
                'status' => 'Active',
            ),
        ));
        
        
    }
}