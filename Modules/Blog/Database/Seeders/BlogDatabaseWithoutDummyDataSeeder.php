<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Database\Seeders\AdminMenusTableSeeder;

class BlogDatabaseWithoutDummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        $this->call([
            AdminMenusTableSeeder::class,
            MenuItemsTableSeeder::class,
            BlogCategoriesWithoutDummyDataSeeder::class
        ]);
    }
}
