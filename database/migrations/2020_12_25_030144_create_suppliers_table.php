<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();

            $table->string('phone');
            $table->string('code')->default('258');
            $table->string('provider')->default('Desconhecido');
            $table->string('email')->nullable();

            $table->string('country')->default('Moçambique');
            $table->string('city')->default('Maputo');
            $table->string('neighborhood')->nullable();
            $table->string('street')->nullable();
            $table->integer('number')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
