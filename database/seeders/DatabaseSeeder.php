<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            DepartmentsTableSeeder::class,
            EmployeesTableSeeder::class,
            UsersTableSeeder::class,
            PharmaciesTableSeeder::class,
            WarehousesTableSeeder::class,
            SuppliersTableSeeder::class,
            CashiersTableSeeder::class,
        ]);
    }
}
