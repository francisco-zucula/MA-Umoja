<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            $table->string('invoice_id')->nullable();
            $table->date('invoice_date')->nullable();
            $table->date('entry_date')->nullable();
            $table->unsignedInteger('quantity');
            $table->decimal('amount');
            $table->string('obs')->nullable();

            $table->string('manufacturer_country')->default('Moçambique');
            $table->string('manufacturer_city')->default('Maputo');
            $table->string('manufacturer_neighborhood')->nullable();
            $table->string('manufacturer_street')->nullable();
            $table->integer('manufacturer_number')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inputs');
    }
}
