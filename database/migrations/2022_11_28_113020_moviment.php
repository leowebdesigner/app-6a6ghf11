<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moviment', function (Blueprint $table) {
            $table->id();
            $table->string('product_sku', 20);
            $table->foreign('product_sku')
                  ->references('sku')
                  ->on('products')
                  ->onUpdate('cascade');
            $table->integer('qtd');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moviment');
    }
};
