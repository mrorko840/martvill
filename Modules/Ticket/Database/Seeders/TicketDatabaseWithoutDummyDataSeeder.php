<?php

namespace Modules\Ticket\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Ticket\Database\Seeders\AdminMenusTableSeeder;
use Modules\Shipping\Database\Seeders\MenuItemsTableSeeder;

class TicketDatabaseWithoutDummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(PrioritiesTableSeeder::class);
        $this->call(ThreadStatusesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(AdminMenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
    }
}
