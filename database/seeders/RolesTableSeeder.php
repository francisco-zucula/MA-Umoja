<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'          => 'Manager',
            'description'   => 'Responsável por toda parte do stock de produtos.',
            'reference'     => 'Gestor de Stock',
        ]);

        Role::create([
            'name'          => 'Administrator',
            'description'   => 'Acesso a todas funcionalidades do Sistema.',
            'reference'     => 'Administrador',
        ]);

        Role::create([
            'name'          => 'Director',
            'description'   => 'Controle interno.',
            'reference'     => 'Direção Técnica',
        ]);

        Role::create([
            'name'          => 'Collaborator',
            'description'   => 'Responsável pelas vendas e atendimento ao consumidor.',
            'reference'     => 'Atendente',
        ]);
    }
}
