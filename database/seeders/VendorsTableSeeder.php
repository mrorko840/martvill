<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VendorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vendors')->delete();
        
        \DB::table('vendors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Gizmo Tizmo',
                'email' => 'admin@techvill.net',
                'phone' => '01854789632',
                'formal_name' => 'Agatha Williams',
                'status' => 'Active',
                'website' => NULL,
                'sell_commissions' => '0.00000000',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Joopie’s Gallery',
                'email' => 'info@jamal.com',
                'phone' => '09854789632',
                'formal_name' => 'Jamal Williams',
                'status' => 'Active',
                'website' => 'https://www.jamal.com',
                'sell_commissions' => '0.00000000',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 16,
                'name' => 'SevenStar Furnitures',
                'email' => 'henry012045@gmail.com',
                'phone' => '0135467989',
                'formal_name' => 'Henry Wiliam',
                'status' => 'Active',
                'website' => NULL,
                'sell_commissions' => '0.00000000',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 17,
                'name' => 'Holistic Store',
                'email' => 'jacob012045@gmail.com',
                'phone' => '0135467989',
                'formal_name' => 'Jacob wiliam',
                'status' => 'Active',
                'website' => NULL,
                'sell_commissions' => '0.00000000',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 18,
                'name' => 'Home Decor Istanbul',
                'email' => 'mason012045@gmail.com',
                'phone' => '0135467989',
                'formal_name' => 'Mason Wiliam',
                'status' => 'Active',
                'website' => NULL,
                'sell_commissions' => '0.00000000',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 19,
                'name' => 'Minimal Lifestyle',
                'email' => 'daniel012045@gmail.com',
                'phone' => '0135467989',
                'formal_name' => 'Daniel Wiliam',
                'status' => 'Active',
                'website' => NULL,
                'sell_commissions' => '0.00000000',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 20,
                'name' => 'Galactic Sports',
                'email' => 'micheal012045@gmail.com',
                'phone' => '0135467989',
                'formal_name' => 'Micheal Wiliam',
                'status' => 'Active',
                'website' => NULL,
                'sell_commissions' => '0.00000000',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 21,
                'name' => 'Lenin Rock',
                'email' => 'lenin.rock@gmail.com',
                'phone' => '01789456258',
                'formal_name' => 'Tawhidul Islam',
                'status' => 'Active',
                'website' => 'https://techvill.net',
                'sell_commissions' => '0.00000000',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 22,
                'name' => 'Danielle Rios',
                'email' => 'jexygobevo@mailinator.com',
                'phone' => '01732216554',
                'formal_name' => NULL,
                'status' => 'Pending',
                'website' => NULL,
                'sell_commissions' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 23,
                'name' => 'Curran Guerra',
                'email' => 'tawuqokel@mailinator.com',
                'phone' => '01248876447',
                'formal_name' => NULL,
                'status' => 'Pending',
                'website' => NULL,
                'sell_commissions' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 24,
                'name' => 'Aurelia Hopper',
                'email' => 'neses@mailinator.com',
                'phone' => '01734487668',
                'formal_name' => NULL,
                'status' => 'Pending',
                'website' => NULL,
                'sell_commissions' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 25,
                'name' => 'Harlan Whitehead',
                'email' => 'beganeco@mailinator.com',
                'phone' => '01451176447',
                'formal_name' => NULL,
                'status' => 'Pending',
                'website' => NULL,
                'sell_commissions' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}