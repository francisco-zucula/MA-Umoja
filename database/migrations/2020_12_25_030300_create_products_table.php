<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('warehouse_id');
            $table->unsignedBigInteger('input_id');

            $table->string('barcode')->nullable()->unique();
            $table->string('lote');
            $table->string('commercial_name');
            $table->string('generic_name');
            $table->string('manufacturer');
            $table->unsignedInteger('quantity');
            $table->date('expiration_date');
            $table->decimal('price_bough');
            $table->decimal('price_sale');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('warehouse_id')
                ->references('id')
                ->on('warehouses')
                ->onDelete('CASCADE');

            $table->foreign('input_id')
                ->references('id')
                ->on('inputs')
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
        Schema::dropIfExists('products');
    }
}
