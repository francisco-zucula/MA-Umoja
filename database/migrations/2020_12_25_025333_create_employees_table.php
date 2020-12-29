<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id');

            $table->string('name');
            $table->string('lastname');
            $table->string('gender', 16);
            $table->date('birth')->default(Carbon::now()->subDecade());
            $table->string('document_number', 32)->unique();
            $table->string('doc_type', 16)->default('BI');
            $table->string('nationality')->default('Moçambicana');
            $table->string('country')->default('Moçambique');
            $table->string('city')->default('Maputo');
            $table->string('street')->nullable();
            $table->integer('number')->nullable();
            $table->string('neighborhood')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('department_id')
                ->references('id')
                ->on('departments')
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
        Schema::dropIfExists('employees');
    }
}
