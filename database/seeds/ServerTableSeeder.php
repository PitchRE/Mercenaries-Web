<?php

use Illuminate\Database\Seeder;

class ServerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servers')->insert([

            'name' => 'Battle_EU',
            'cur_players' => 0,
            'max_players' => 0,
            'map' => 'null',
            'faction_1' => 'null',
            'faction_2' => 'null',
            'fog' => 0,
            'weather' => 0,
            'ip' => '127.0.0.1:7240',

        ]);
    }
}
