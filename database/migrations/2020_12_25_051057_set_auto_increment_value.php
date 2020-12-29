<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class SetAutoIncrementValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tables = [
            'departments',
            'roles',
            'employees',
            'users',
            'logs',
            'pharmacies',
            'suppliers',
            'warehouses',
            'inputs',
            'products',
            'product_details',
            'options',
            'cashiers',
            'cashier_details',
            'sales',
            'outputs',
            'services',
            'product_options',
            'product_outputs',
            'product_sales',
            'service_sales',
            'department_managers',
        ];

        if (env('DB_CONNECTION') == 'mysql') {
            foreach ($tables as $table) {
                $statement = "ALTER TABLE  $table  AUTO_INCREMENT = " . now()->year . 1000;
                DB::statement($statement);
            }
        } else if (env('DB_CONNECTION') == 'pgsql') {
            foreach ($tables as $table) {
                $statement = "ALTER SEQUENCE " . $table . "_id_seq RESTART WITH " . now()->year . 1000;
                DB::statement($statement);
            }
        } else {
            foreach ($tables as $table) {
                $statement = "ALTER TABLE  $table  AUTO_INCREMENT = " . now()->year . 1000;
                DB::statement($statement);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
