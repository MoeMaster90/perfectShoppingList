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
        Schema::create('preset_team', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('preset_id');
            $table->unsignedBigInteger('team_id');
            $table->timestamps();

            $table->foreign('preset_id')->references('id')->on('presets');
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
        Schema::dropIfExists('preset_team');
    }
};
