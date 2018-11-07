<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsArbitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions_arbiters', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('competition_id');
            $table->foreign('competition_id')->references('id')->on('competitions');
            $table->unsignedInteger('arbiter_id');
            $table->foreign('arbiter_id')->references('id')->on('users');
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
        Schema::dropIfExists('competitions_arbiters');
    }
}
