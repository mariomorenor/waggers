<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name='Mario Moreno';
        $user->nickname='m@rio';
        $user->email='1@1';
        $user->password = Hash::make('123');
        $user->email_verified_at = Carbon::now();

        $user->save();

    }
}
