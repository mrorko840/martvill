<?php

namespace Modules\Ticket\Database\Seeders;
use Illuminate\Database\Seeder;


class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Marketing',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Sales',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Technical',
            ),
        ));
        
        
    }
}