<?php

use App\Events\WaggerCreated;
use App\Wagger;
use Illuminate\Database\Seeder;

class WaggersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wagger = new Wagger;
        $wagger->game_dates_id = 1;
        $wagger->winner_user_id = 1;
        $wagger->loser_user_id = 2;

        $wagger->save();
        event(new WaggerCreated($wagger->winner_user_id, $wagger->loser_user_id));
    }
}
