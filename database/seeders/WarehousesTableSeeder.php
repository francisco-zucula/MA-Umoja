<?php

namespace Database\Seeders;

use App\Models\Pharmacy;
use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class WarehousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pharmacy = Pharmacy::where('nuit', '401180631')->first();
        Warehouse::create([
            'pharmacy'      => $pharmacy->id,
            'name'          => 'Local',
        ]);
    }
}
