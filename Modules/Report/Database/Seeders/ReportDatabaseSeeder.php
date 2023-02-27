<?php

namespace Modules\Report\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\MenuBuilder\Http\Models\MenuItems;

class ReportDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AdminMenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
    }
}
