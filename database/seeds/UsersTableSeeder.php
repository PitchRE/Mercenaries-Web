<?php

use App\User;
use Illuminate\Database\Seeder;

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
        $user->name = 'Pitch';
        $user->email = 'gazowany.crafter@gmail.com';
        $user->password = Hash::make('password');
        $user->unique_id = 982368;
        $user->save();

        Log::debug('An informational message.');
    }
}
