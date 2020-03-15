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
            $item->image = "/storage/items/{$obj->code_name}.webp";
            $item->price = $obj->price;
            $item->defence = $obj->defence;
            $item->save();
        }

    }
}
