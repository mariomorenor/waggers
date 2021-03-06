<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_dates', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->integer('rounds');
            $table->string('game_mode');
            $table->string('map_mode');
            $table->string('prize');
            $table->foreignId('referee_user_id')->constrained('users');
            $table->foreignId('local_user_id')->constrained('users');
            $table->foreignId('visitor_user_id')->constrained('users');
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
        Schema::dropIfExists('game_dates');
    }
}
