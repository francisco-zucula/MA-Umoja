<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pharmacy');
            $table->unsignedBigInteger('manager_id')->nullable();

            $table->string('name')->unique();
            $table->string('city')->default('Maputo');
            $table->string('neighborhood')->nullable();
            $table->string('street')->nullable();
            $table->integer('number')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('pharmacy')
                ->references('id')
                ->on('pharmacies')
                ->onDelete('CASCADE');

            $table->foreign('manager_id')
                ->references('id')
                ->on('employees')
                ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('warehouses');
    }
}
