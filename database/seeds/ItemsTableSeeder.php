<?php

use App\Item;
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

        $json = File::get("storage/item_list.json");
        $data = json_decode($json);
        foreach ($data as $obj) {

            $item = Item::firstOrNew(array('code_name' => $obj->code_name));
            $item->code_name = $obj->code_name;
            $item->name = $obj->name;
            $item->type = $obj->type;
            $item->game_id = $obj->game_id;
            $item->image = "/storage/items/{$obj->model_name}.webp";
            $item->price = $obj->price;
            $item->head_armor = $obj->head_armor;
            $item->body_armor = $obj->body_armor;
            $item->leg_armor = $obj->leg_armor;
            $item->weight = $obj->weight;
            $item->speed_rating = $obj->speed_rating;
            $item->thrust_damage = $obj->thrust_damage;
            $item->thrust_damage_type = $obj->thrust_damage_type;
            $item->swing_damage = $obj->swing_damage;
            $item->swing_damage_type = $obj->swing_damage_type;
            $item->missile_speed = $obj->missile_speed;
            $item->horse_speed = $obj->horse_speed;
            $item->horse_maneuver = $obj->horse_maneuver;
            $item->buyable = $obj->buyable;
            $item->model_name = $obj->model_name;

            $item->save();
        }

    }
}
