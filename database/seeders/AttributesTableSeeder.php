<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attributes')->delete();
        
        \DB::table('attributes')->insert(array (
            0 => 
            array (
                'id' => 26,
                'attribute_group_id' => 28,
                'name' => 'Color',
                'description' => NULL,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            1 => 
            array (
                'id' => 27,
                'attribute_group_id' => 28,
                'name' => 'RAM',
                'description' => NULL,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            2 => 
            array (
                'id' => 28,
                'attribute_group_id' => 28,
                'name' => 'Storage',
                'description' => NULL,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            3 => 
            array (
                'id' => 29,
                'attribute_group_id' => 28,
                'name' => 'Model Number',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            4 => 
            array (
                'id' => 30,
                'attribute_group_id' => 28,
                'name' => 'Model Name',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 0,
                'is_required' => 1,
            ),
            5 => 
            array (
                'id' => 31,
                'attribute_group_id' => 28,
                'name' => 'Touchscreen',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 0,
                'is_required' => 1,
            ),
            6 => 
            array (
                'id' => 32,
                'attribute_group_id' => 28,
                'name' => 'Browse Type',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            7 => 
            array (
                'id' => 33,
                'attribute_group_id' => 28,
                'name' => 'Display Size',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            8 => 
            array (
                'id' => 34,
                'attribute_group_id' => 28,
                'name' => 'Resolution',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            9 => 
            array (
                'id' => 35,
                'attribute_group_id' => 28,
                'name' => 'Display Type',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            10 => 
            array (
                'id' => 36,
                'attribute_group_id' => 28,
                'name' => 'Operating System',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            11 => 
            array (
                'id' => 37,
                'attribute_group_id' => 28,
                'name' => 'Processor Type',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            12 => 
            array (
                'id' => 38,
                'attribute_group_id' => 28,
                'name' => 'Sim Type',
                'description' => NULL,
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            13 => 
            array (
                'id' => 39,
                'attribute_group_id' => 28,
                'name' => 'Network Type',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            14 => 
            array (
                'id' => 40,
                'attribute_group_id' => 28,
                'name' => 'Battery Capacity',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            15 => 
            array (
                'id' => 41,
                'attribute_group_id' => 28,
                'name' => 'Weight',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            16 => 
            array (
                'id' => 42,
                'attribute_group_id' => 28,
                'name' => 'SIM Size',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            17 => 
            array (
                'id' => 55,
                'attribute_group_id' => 28,
                'name' => 'Processor Core',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 0,
                'is_required' => 1,
            ),
            18 => 
            array (
                'id' => 239,
                'attribute_group_id' => 28,
                'name' => 'Removable Battery',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            19 => 
            array (
                'id' => 241,
                'attribute_group_id' => 28,
                'name' => 'Bluetooth Version',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            20 => 
            array (
                'id' => 265,
                'attribute_group_id' => 29,
                'name' => 'Operating Frequency',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            21 => 
            array (
                'id' => 267,
                'attribute_group_id' => 29,
                'name' => 'Smartphones',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            22 => 
            array (
                'id' => 276,
                'attribute_group_id' => 32,
                'name' => 'Battery Cell',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            23 => 
            array (
                'id' => 277,
                'attribute_group_id' => 32,
                'name' => 'Processor Brand',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            24 => 
            array (
                'id' => 278,
                'attribute_group_id' => 32,
                'name' => 'Processor Name',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            25 => 
            array (
                'id' => 279,
                'attribute_group_id' => 32,
                'name' => 'Processor Generation',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            26 => 
            array (
                'id' => 281,
                'attribute_group_id' => 32,
                'name' => 'SSD',
                'description' => 'Describe Storage of hp laptops',
                'type' => 'dropdown',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 1,
            ),
            27 => 
            array (
                'id' => 282,
                'attribute_group_id' => 32,
                'name' => 'Number of Cores',
                'description' => 'Describe Number of Cores of hp laptops',
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            28 => 
            array (
                'id' => 284,
                'attribute_group_id' => 32,
                'name' => 'System Architecture',
                'description' => 'Describe System Architecture of hp laptops',
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            29 => 
            array (
                'id' => 285,
                'attribute_group_id' => 32,
                'name' => 'Screen Size',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            30 => 
            array (
                'id' => 286,
                'attribute_group_id' => 32,
                'name' => 'Screen Resolution',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            31 => 
            array (
                'id' => 292,
                'attribute_group_id' => 32,
                'name' => 'Type',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            32 => 
            array (
                'id' => 298,
                'attribute_group_id' => 32,
                'name' => 'OS Architecture',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            33 => 
            array (
                'id' => 299,
                'attribute_group_id' => 32,
                'name' => 'Dimensions',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            34 => 
            array (
                'id' => 305,
                'attribute_group_id' => 32,
                'name' => 'Battery Backup',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            35 => 
            array (
                'id' => 322,
                'attribute_group_id' => 32,
                'name' => 'RAM Type',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            36 => 
            array (
                'id' => 341,
                'attribute_group_id' => 33,
                'name' => 'Brand',
                'description' => 'Describe brand of dslr',
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            37 => 
            array (
                'id' => 344,
                'attribute_group_id' => 33,
                'name' => 'Video Resolution',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            38 => 
            array (
                'id' => 347,
                'attribute_group_id' => 33,
                'name' => 'Battery Type',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            39 => 
            array (
                'id' => 349,
                'attribute_group_id' => 33,
                'name' => 'Sensor Type',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            40 => 
            array (
                'id' => 357,
                'attribute_group_id' => 33,
                'name' => 'Image Sensor Size',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            41 => 
            array (
                'id' => 359,
                'attribute_group_id' => 33,
                'name' => 'Touch Screen',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            42 => 
            array (
                'id' => 365,
                'attribute_group_id' => 33,
                'name' => 'Image Sensor Type',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            43 => 
            array (
                'id' => 368,
                'attribute_group_id' => 33,
                'name' => 'Video Quality',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            44 => 
            array (
                'id' => 370,
                'attribute_group_id' => 33,
                'name' => 'Compatible Card',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            45 => 
            array (
                'id' => 372,
                'attribute_group_id' => 33,
                'name' => 'Lens Type',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            46 => 
            array (
                'id' => 376,
                'attribute_group_id' => 33,
                'name' => 'Battery',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            47 => 
            array (
                'id' => 383,
                'attribute_group_id' => 33,
                'name' => 'Video Format',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            48 => 
            array (
                'id' => 388,
                'attribute_group_id' => 33,
                'name' => 'Display Resolution',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            49 => 
            array (
                'id' => 393,
                'attribute_group_id' => 33,
                'name' => 'Storage Type',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
            50 => 
            array (
                'id' => 397,
                'attribute_group_id' => 33,
                'name' => 'HDD Available',
                'description' => NULL,
                'type' => 'field',
                'status' => 'Active',
                'is_filterable' => 1,
                'is_required' => 0,
            ),
        ));
        
        
    }
}