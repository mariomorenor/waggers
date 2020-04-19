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

        $user = new User;
        $user->name='Oswaldo Moreno';
        $user->nickname='smex';
        $user->email='oswaldo@moreno';
        $user->password = Hash::make('123');
        $user->email_verified_at = Carbon::now();

        $user->save();

        $user = new User;
        $user->name='Stalin Pinos';
        $user->nickname='forter1.0';
        $user->email='pinos@tugo';
        $user->password = Hash::make('123');
        $user->email_verified_at = Carbon::now();

        $user->save();

        $user = new User;
        $user->name='Fidel Mendoza';
        $user->nickname='Loki Laufeyson';
        $user->email='fidel@mendoza';
        $user->password = Hash::make('123');
        $user->email_verified_at = Carbon::now();

        $user->save();

    }
}
