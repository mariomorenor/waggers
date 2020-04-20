<?php

use App\game_date;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GameDatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game_date = new game_date;

        $game_date->date = Carbon::create(2020,6,1,17,0,0);
        $game_date->rounds = 10;
        $game_date->game_mode = '2v2';
        $game_date->map_mode = 'box figth';
        $game_date->prize = '$5';
        $game_date->referee_user_id = 3;
        $game_date->local_user_id = 1;
        $game_date->visitor_user_id = 2;

        $game_date->save();

    }
}
