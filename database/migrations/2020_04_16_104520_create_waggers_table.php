<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaggersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waggers', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('rounds');
            $table->string('game_mode');
            $table->string('map_mode');
            $table->foreignId('referee_user_id')->constrained('users');
            $table->string('prize');
            $table->foreignId('winner_user_id')->constrained('users');
            $table->foreignId('loser_user_id')->constrained('users');
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
        Schema::dropIfExists('waggers');
    }
}
