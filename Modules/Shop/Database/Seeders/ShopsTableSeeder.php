<?php

namespace Modules\Shop\Database\Seeders;

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('shops')->delete();
        
        \DB::table('shops')->insert(array (
            0 => 
            array (
                'id' => 1,
                'vendor_id' => 2,
                'name' => 'Jamal',
                'email' => 'vendor@techvill.net',
                'website' => NULL,
                'alias' => 'jamal',
                'address' => 'House no: 47, Road no: 02',
                'country' => 'bd',
                'state' => '87',
                'city' => 'nilphamari',
                'post_code' => '5300',
                'phone' => '09854789632',
                'fax' => NULL,
                'description' => NULL,
                'status' => 'Active',
            ),
            1 => 
            array (
                'id' => 2,
                'vendor_id' => 1,
                'name' => 'Henry\'s Shop',
                'email' => 'henry012045@gmail.com',
                'website' => NULL,
                'alias' => 'henry-william',
                'address' => 'House no: 19, Road no: 01',
                'country' => 'au',
                'state' => '7',
                'city' => 'bonegilla',
                'post_code' => '6280',
                'phone' => '0135467989',
                'fax' => NULL,
                'description' => NULL,
                'status' => 'Active',
            ),
            2 => 
            array (
                'id' => 3,
                'vendor_id' => 17,
                'name' => 'Jacob',
                'email' => 'jacob012045@gmail.com',
                'website' => NULL,
                'alias' => 'jacob-wiliam',
                'address' => 'House no: 2',
                'country' => 'be',
                'state' => 'wal',
                'city' => 'baileux',
                'post_code' => '6280',
                'phone' => '0135467989',
                'fax' => NULL,
                'description' => NULL,
                'status' => 'Active',
            ),
            3 => 
            array (
                'id' => 4,
                'vendor_id' => 18,
                'name' => 'Mason',
                'email' => 'mason012045@gmail.com',
                'website' => NULL,
                'alias' => 'mason-william',
                'address' => 'House no: 9, Road no: 11',
                'country' => 'ru',
                'state' => '3',
                'city' => 'Souzga',
                'post_code' => '6280',
                'phone' => '0135467989',
                'fax' => NULL,
                'description' => NULL,
                'status' => 'Active',
            ),
            4 => 
            array (
                'id' => 5,
                'vendor_id' => 19,
                'name' => 'Daniel',
                'email' => 'daniel012045@gmail.com',
                'website' => NULL,
                'alias' => 'daniel-william',
                'address' => 'House no: 9, Road no: 11',
                'country' => 'us',
                'state' => 'ny',
                'city' => 'Boston',
                'post_code' => '6280',
                'phone' => '0135467989',
                'fax' => NULL,
                'description' => NULL,
                'status' => 'Active',
            ),
            5 => 
            array (
                'id' => 6,
                'vendor_id' => 20,
                'name' => 'Micheal',
                'email' => 'micheal012045@gmail.com',
                'website' => NULL,
                'alias' => 'micheal-william',
                'address' => 'house no: 7',
                'country' => 'bd',
                'state' => '81',
                'city' => 'Azimpur',
                'post_code' => '6280',
                'phone' => '0135467989',
                'fax' => NULL,
                'description' => NULL,
                'status' => 'Active',
            ),
            6 => 
            array (
                'id' => 7,
                'vendor_id' => 16,
                'name' => 'SevenStar Furnitures',
                'email' => 'henry012045@gmail.com',
                'website' => NULL,
                'alias' => 'sevenStar-furnitures',
                'address' => 'house no: 7',
                'country' => 'bd',
                'state' => '81',
                'city' => 'Azimpur',
                'post_code' => '6280',
                'phone' => '0135467988',
                'fax' => NULL,
                'description' => NULL,
                'status' => 'Active',
            ),
            7 => 
            array (
                'id' => 8,
                'vendor_id' => 21,
                'name' => 'Lenin Rock',
                'email' => 'lenin.rock@gmail.com',
                'website' => NULL,
                'alias' => 'lenin-rock',
                'address' => 'house no: 7',
                'country' => 'bd',
                'state' => '81',
                'city' => 'Azimpur',
                'post_code' => '6280',
                'phone' => '0135467939',
                'fax' => NULL,
                'description' => NULL,
                'status' => 'Active',
            ),
            8 => 
            array (
                'id' => 9,
                'vendor_id' => 22,
                'name' => 'Danielle Rios',
                'email' => 'jexygobevo@mailinator.com',
                'website' => NULL,
                'alias' => 'anthony-hendricks-adena-stout',
                'address' => 'Sit molestiae bland',
                'country' => 'pl',
                'state' => '86',
                'city' => 'Babiak',
                'post_code' => '54000',
                'phone' => '01732216554',
                'fax' => NULL,
                'description' => NULL,
                'status' => 'Active',
            ),
            9 => 
            array (
                'id' => 10,
                'vendor_id' => 23,
                'name' => 'Curran Guerra',
                'email' => 'tawuqokel@mailinator.com',
                'website' => NULL,
                'alias' => 'daryl-long-garrett-nichols',
                'address' => 'Officia quos in sit',
                'country' => 'ru',
                'state' => '3',
                'city' => 'Biyka',
                'post_code' => '25454',
                'phone' => '01248876447',
                'fax' => NULL,
                'description' => NULL,
                'status' => 'Active',
            ),
            10 => 
            array (
                'id' => 11,
                'vendor_id' => 24,
                'name' => 'Aurelia Hopper',
                'email' => 'neses@mailinator.com',
                'website' => NULL,
                'alias' => 'ivor-barber-lesley-figueroa',
                'address' => 'Qui voluptatem ut ab',
                'country' => 'la',
                'state' => '22',
                'city' => 'Ban Houakhoua',
                'post_code' => '76266',
                'phone' => '01734487668',
                'fax' => NULL,
                'description' => NULL,
                'status' => 'Active',
            ),
            11 => 
            array (
                'id' => 12,
                'vendor_id' => 25,
                'name' => 'Harlan Whitehead',
                'email' => 'beganeco@mailinator.com',
                'website' => NULL,
                'alias' => 'arden-bryant-kiara-nash',
                'address' => 'Cumque aliquam ullam',
                'country' => 'pw',
                'state' => '1',
                'city' => 'Ngchemiangel',
                'post_code' => '24875',
                'phone' => '01451176447',
                'fax' => NULL,
                'description' => NULL,
                'status' => 'Active',
            ),
        ));


    }
}
