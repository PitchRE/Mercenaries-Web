<?php

use Illuminate\Database\Seeder;

class UserItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_items')->insert([

            'user_id' => 1,
            'item_id' => 1,

        ]);
        DB::table('user_items')->insert([

            'user_id' => 1,
            'item_id' => 2,

        ]);
        DB::table('user_items')->insert([

            'user_id' => 1,
            'item_id' => 3,

        ]);
        DB::table('user_items')->insert([

            'user_id' => 1,
            'item_id' => 4,

        ]);
        DB::table('user_items')->insert([

            'user_id' => 1,
            'item_id' => 5,

        ]);
        DB::table('user_items')->insert([

            'user_id' => 1,
            'item_id' => 6,

        ]);
    }
}
