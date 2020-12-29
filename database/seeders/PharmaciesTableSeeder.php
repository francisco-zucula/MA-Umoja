<?php

namespace Database\Seeders;

use App\Models\Pharmacy;
use Illuminate\Database\Seeder;

class PharmaciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pharmacy::create([
            'nuit' => '401180631',
            'name' => 'Farmácia Morais',
            'phone' => '84 05 30 852',
            'email' => 'grupomo1@grupomorais.com',
            'city' => 'Maputo',
            'neighborhood' => 'Q.6 Maxaquene D',
            'street' => '43',
            'number' => '43',
        ]);
    }
}
