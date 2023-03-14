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
        Schema::create('shopping_list_team', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shopping_list_id');
            $table->unsignedBigInteger('team_id');
            $table->timestamps();

            $table->foreign('shopping_list_id')->references('id')->on('shopping_lists');
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopping_list_team');
    }
};
