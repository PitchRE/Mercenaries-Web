<?php

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
        DB::table('users')->insert([
            'name' => 'Pitch',
            'email' => 'gazowany.crafter@gmail.com',
            'password' => Hash::make('password'),
            'unique_id' => 212212,
        ]);
    }
}
