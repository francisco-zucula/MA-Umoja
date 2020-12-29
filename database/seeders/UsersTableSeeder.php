<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role       = Role::where('name', 'Administrator')->first();
        $employee   = Employee::where('name', 'Grupo')->first();

        User::create([
            'employee_id'   => $employee->id,
            'role_id'       => $role->id,
            'username'         => 'morais@group',
            'password'      => Hash::make('grupo@morais')
        ]);
    }
}
