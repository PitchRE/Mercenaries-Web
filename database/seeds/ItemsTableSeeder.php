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
            'name' => "Solid Shield",
            'type' => "itp_type_shield",
            'code_name' => "round_shield_d",
            'game_id' => 530,
            'image' => "/storage/items/oim_shield_round_c.png",
            'price' => 750,
        ]);
        DB::table('items')->insert([
            'name' => "Good Pistol",
            'type' => "itp_type_crossbow",
            'code_name' => "good_pistol_c",
            'game_id' => 612,
            'image' => "/storage/items/pistol_rich_c.png",
            'price' => 750,
        ]);
        DB::table('items')->insert([
            'name' => "Hussar Helmet With Crest",
            'type' => "itp_type_head_armor",
            'code_name' => "poland_gusar_helmet_greben",
            'game_id' => 412,
            'image' => "/storage/items/pol_husar_helm_greben.png",
            'price' => 750,
        ]);
        DB::table('items')->insert([
            'name' => "Saber",
            'type' => "itp_type_one_handed_wpn",
            'code_name' => "sablya_d",
            'game_id' => 453,
            'image' => "/storage/items/polyak_sablya_d.png",
            'price' => 750,
        ]);
        DB::table('items')->insert([
            'name' => "Thrusting Sword",
            'type' => "itp_type_one_handed_wpn",
            'code_name' => "prosta_shpaga",
            'game_id' => 443,
            'image' => "/storage/items/shpaga_pure_a.png",
            'price' => 750,
        ]);
        DB::table('items')->insert([
            'name' => "Half-Cuirass",
            'type' => "itp_type_body_armor",
            'code_name' => "m_swed_norm_armor",
            'game_id' => 813,
            'image' => "/storage/items/swed_kirasa.png",
            'price' => 750,
        ]);

        DB::table('items')->insert([
            'name' => "Bodyguard Camisole",
            'type' => "itp_type_body_armor",
            'code_name' => "evropa_gvardia_uniforma",
            'game_id' => 267,
            'image' => "/storage/items/swed_leibguard.png",
            'price' => 750,
        ]);

        DB::table('items')->insert([
            'name' => "Swedish Pikeman Uniform",
            'type' => "itp_type_body_armor",
            'code_name' => "evropa_pika_uniforma",
            'game_id' => 297,
            'image' => "/storage/items/swed_pikeman.png",
            'price' => 750,
        ]);
        DB::table('items')->insert([
            'name' => "Chain mail",
            'type' => "itp_type_body_armor",
            'code_name' => "m_ttr_norm_armor",
            'game_id' => 807,
            'image' => "/storage/items/ttr_kolcha.png",
            'price' => 750,
        ]);

        DB::table('items')->insert([
            'name' => "Behterets",
            'type' => "itp_type_body_armor",
            'code_name' => "tatar_bahter_a",
            'game_id' => 300,
            'image' => "/storage/items/ttr_mega-yushman.png",
            'price' => 750,
        ]);

        DB::table('items')->insert([
            'name' => "Chain Armor",
            'type' => "itp_type_body_armor",
            'code_name' => "tatar_seymen_armor",
            'game_id' => 288,
            'image' => "/storage/items/ttr_seymen.png",
            'price' => 750,
        ]);

        DB::table('items')->insert([
            'name' => "Chain Armor",
            'type' => "itp_type_body_armor",
            'code_name' => "m_ukr_norm_armor",
            'game_id' => 799,
            'image' => "/storage/items/ukr_kolcha.png",
            'price' => 750,
        ]);
        DB::table('items')->insert([
            'name' => "Yushman",
            'type' => "itp_type_body_armor",
            'code_name' => "m_ttr_good_armor",
            'game_id' => 808,
            'image' => "/storage/items/yushman.png",
            'price' => 750,
        ]);

        DB::table('items')->insert([
            'name' => "Jarids",
            'type' => "itp_type_thrown",
            'code_name' => "jarid",
            'game_id' => 559,
            'image' => "/storage/items/jarid_quiver.png",
            'price' => 750,
        ]);

        DB::table('items')->insert([
            'name' => "Morion",
            'type' => "itp_type_head_armor",
            'code_name' => "m_swed_norm_p_helmet",
            'game_id' => 819,
            'image' => "/storage/items/morion_good.png",
            'price' => 750,
        ]);

        DB::table('items')->insert([
            'name' => "Miquelet Musket",
            'type' => "itp_type_crossbow",
            'code_name' => "uber_mushket",
            'game_id' => 713,
            'image' => "/storage/items/mushketi_b.png",
            'price' => 750,
        ]);

        DB::table('items')->insert([
            'name' => "Thick Shield",
            'type' => "itp_type_shield",
            'code_name' => "good_shield",
            'game_id' => 733,
            'image' => "/storage/items/oim_shield_round_a.png",
            'price' => 750,
        ]);

    }
}
