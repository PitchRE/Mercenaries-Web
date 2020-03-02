<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => "Knight Armor",
            'type' => "itp_type_body_armor",
            'code_name' => "itm_knight_armor",
            'game_id' => 111,
            'image' => "https://i.etsystatic.com/14134862/r/il/f8f064/1191420347/il_570xN.1191420347_lh4l.jpg",
            'price' => 750,
        ]);
    }
}
