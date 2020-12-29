<?php

namespace Database\Seeders;

use App\Models\Cashier;
use Illuminate\Database\Seeder;

class CashiersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cashier::create([
            'control_id'    => 'GM-202001',
            'name'          => 'Caixa 01',
        ]);

        Cashier::create([
            'control_id'    => 'GM-202002',
            'name'          => 'Caixa 02',
        ]);
    }
}
