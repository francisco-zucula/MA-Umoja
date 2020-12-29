<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' => 'Administração e Finanças'
        ]);

        Department::create([
            'name' => 'Tecnologia e Informações'
        ]);

        Department::create([
            'name' => 'Comercial'
        ]);
    }
}
