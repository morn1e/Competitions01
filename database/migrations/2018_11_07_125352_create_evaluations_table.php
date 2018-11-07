<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('competition_id');
            $table->foreign('competition_id')->references('id')->on('competitions');
            $table->unsignedInteger('participant_id'); // for participant 
            $table->foreign('participant_id')->references('id')->on('users');
            $table->unsignedInteger('arbiter_id'); // for arbiter
            $table->foreign('arbiter_id')->references('id')->on('users');
            $table->integer('criterion_1');
            $table->integer('criterion_2');
            $table->integer('criterion_3');
            $table->date('date_anulated');
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
        Schema::dropIfExists('evaluations');
    }
}
