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
        DB::table('items')->insert([
            'name' => "pika",
            'type' => "itp_type_polearm",
            'code_name' => "itm_knight_armor",
            'game_id' => 111,
            'image' => "https://vignette.wikia.nocookie.net/elderscrolls/images/c/c8/Srebrna_w%C5%82%C3%B3cznia_%28Morrowind%29.png/revision/latest/top-crop/width/360/height/450?cb=20161031153100&path-prefix=pl",
            'price' => 750,
        ]);
        DB::table('items')->insert([
            'name' => "knight boots",
            'type' => "itp_type_foot_armor",
            'code_name' => "itm_knight_armor",
            'game_id' => 111,
            'image' => "https://previews.123rf.com/images/vitaliygaydukov/vitaliygaydukov1706/vitaliygaydukov170600026/81281766-iron-fantasy-high-boots-knight-armor-isolated-on-white-background-3d-illustration.jpg",
            'price' => 750,
        ]);
        DB::table('items')->insert([
            'name' => "gloves",
            'type' => "itp_type_hand_armor",
            'code_name' => "itm_knight_armor",
            'game_id' => 111,
            'image' => "https://cdn11.bigcommerce.com/s-ejfi37frk5/images/stencil/1280x1280/products/11964/48375/lg112__37806.1516131067.jpg?c=2&imbypass=on",
            'price' => 750,
        ]);
        DB::table('items')->insert([
            'name' => "armet",
            'type' => "itp_type_head_armor",
            'code_name' => "itm_knight_armor",
            'game_id' => 111,
            'image' => "https://static.turbosquid.com/Preview/001286/418/KB/_Z.jpg",
            'price' => 750,
        ]);

        DB::table('items')->insert([
            'name' => "Horse",
            'type' => "itp_type_horse",
            'code_name' => "itm_knight_armor",
            'game_id' => 111,
            'image' => "https://animavet.pl/media/products/5367898ede28dd50ec57a268d4c05fae/images/thumbnail/large_177.jpg?lm=1555607107",
            'price' => 750,
        ]);
    }
}
