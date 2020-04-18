<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersCountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_country')
            ->insert([
                'user_id'=>1,
                'country_id'=>65
            ]);
    }
}
