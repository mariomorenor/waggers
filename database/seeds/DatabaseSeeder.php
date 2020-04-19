<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UsersCountriesTableSeeder::class);
        factory(User::class, 100)->create();
        $this->call(GameDatesTableSeeder::class);
        $this->call(WaggersTableSeeder::class);
    }
}
