<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = Department::where('name', '=', 'Comercial')->first();

        Employee::create([
            'department_id'     => $department->id,
            'name'              => 'Grupo',
            'lastname'          => 'Morais',
            'gender'            => 'No Gender',
            'birth'             => Carbon::now()->subDecades(2),
            'document_number'   => '401180631',
            'doc_type'          => 'NUIT',
            'street'            => '',
            'number'            => '43',
            'neighborhood'      => 'Q.6 Maxaquene D'
        ]);
    }
}
