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
        Schema::create('preset_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('preset_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('sorting');
            $table->timestamps();

            $table->foreign('preset_id')->references('id')->on('presets');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preset_product');
    }
};
