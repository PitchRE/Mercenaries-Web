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
        DB::table('items')->UpdateOrInsert([
            'name' => "Solid Shield",
            'type' => "itp_type_shield",
            'code_name' => "round_shield_d",
            'game_id' => 530,
            'image' => "/storage/items/oim_shield_round_c.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "Hussar Helmet With Crest",
            'type' => "itp_type_head_armor",
            'code_name' => "poland_gusar_helmet_greben",
            'game_id' => 412,
            'image' => "/storage/items/pol_husar_helm_greben.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "Half-Cuirass",
            'type' => "itp_type_body_armor",
            'code_name' => "m_swed_norm_armor",
            'game_id' => 813,
            'image' => "/storage/items/swed_kirasa.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "Bodyguard Camisole",
            'type' => "itp_type_body_armor",
            'code_name' => "evropa_gvardia_uniforma",
            'game_id' => 267,
            'image' => "/storage/items/swed_leibguard.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "Swedish Pikeman Uniform",
            'type' => "itp_type_body_armor",
            'code_name' => "evropa_pika_uniforma",
            'game_id' => 297,
            'image' => "/storage/items/swed_pikeman.png",
            'price' => 750,
        ]);
        DB::table('items')->UpdateOrInsert([
            'name' => "Chain mail",
            'type' => "itp_type_body_armor",
            'code_name' => "m_ttr_norm_armor",
            'game_id' => 807,
            'image' => "/storage/items/ttr_kolcha.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "Behterets",
            'type' => "itp_type_body_armor",
            'code_name' => "tatar_bahter_a",
            'game_id' => 300,
            'image' => "/storage/items/ttr_mega-yushman.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "Chain Armor",
            'type' => "itp_type_body_armor",
            'code_name' => "tatar_seymen_armor",
            'game_id' => 288,
            'image' => "/storage/items/ttr_seymen.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "Chain Armor",
            'type' => "itp_type_body_armor",
            'code_name' => "m_ukr_norm_armor",
            'game_id' => 799,
            'image' => "/storage/items/ukr_kolcha.png",
            'price' => 750,
        ]);
        DB::table('items')->UpdateOrInsert([
            'name' => "Yushman",
            'type' => "itp_type_body_armor",
            'code_name' => "m_ttr_good_armor",
            'game_id' => 808,
            'image' => "/storage/items/yushman.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "Jarids",
            'type' => "itp_type_thrown",
            'code_name' => "jarid",
            'game_id' => 559,
            'image' => "/storage/items/jarid_quiver.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "Morion",
            'type' => "itp_type_head_armor",
            'code_name' => "m_swed_norm_p_helmet",
            'game_id' => 819,
            'image' => "/storage/items/morion_good.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "Thick Shield",
            'type' => "itp_type_shield",
            'code_name' => "good_shield",
            'game_id' => 733,
            'image' => "/storage/items/oim_shield_round_a.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "Barbuta",
            'type' => "itp_type_head_armor",
            'code_name' => "barbuta1",
            'game_id' => 1055,
            'image' => "/storage/items/barbuta1.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "bec de corbin",
            'type' => "itp_type_polearm",
            'code_name' => "bec_de_corbin",
            'game_id' => 1026,
            'image' => "/storage/items/bec_de_corbin.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "bec de corbin",
            'type' => "itp_type_polearm",
            'code_name' => "bec_de_corbin",
            'game_id' => 1026,
            'image' => "/storage/items/bec_de_corbin.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "Berdish",
            'type' => "itp_type_two_handed_wpn",
            'code_name' => "berdish",
            'game_id' => 506,
            'image' => "/storage/items/berdish.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "Halberd",
            'type' => "itp_type_two_handed_wpn",
            'code_name' => "alebarda",
            'game_id' => 505,
            'image' => "/storage/items/alebarda.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "bolzanobucket",
            'type' => "itp_type_head_armor",
            'code_name' => "alebarda",
            'game_id' => 1063,
            'image' => "/storage/items/bolzanobucket.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "byzantion",
            'type' => "itp_type_head_armor",
            'code_name' => "byzantion",
            'game_id' => 1058,
            'image' => "/storage/items/byzantion.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "chapel_de_fer",
            'type' => "itp_type_head_armor",
            'code_name' => "chapel-de-fer",
            'game_id' => 1008,
            'image' => "/storage/items/chapel-de-fer.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "crownedhelm",
            'type' => "itp_type_head_armor",
            'code_name' => "crownedhelm",
            'game_id' => 1070,
            'image' => "/storage/items/crownedhelm.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "visored_salet",
            'type' => "itp_type_head_armor",
            'code_name' => "visored_salet",
            'game_id' => 1057,
            'image' => "/storage/items/visored_salet.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "visored_salet_coif",
            'type' => "itp_type_head_armor",
            'code_name' => "visored_salet_coif",
            'game_id' => 1056,
            'image' => "/storage/items/visored_salet_coif.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "visored_salet_coif",
            'type' => "itp_type_head_armor",
            'code_name' => "visored_salet_coif",
            'game_id' => 1056,
            'image' => "/storage/items/visored_salet_coif.png",
            'price' => 750,
        ]);
        DB::table('items')->UpdateOrInsert([
            'name' => "open_salet",
            'type' => "itp_type_head_armor",
            'code_name' => "open_salet",
            'game_id' => 1059,
            'image' => "/storage/items/open_salet.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'name' => "frenchpepperpot",
            'type' => "itp_type_head_armor",
            'code_name' => "frenchpepperpot",
            'game_id' => 1060,
            'image' => "/storage/items/frenchpepperpot.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'code_name' => "greathelm1",
            'name' => "greathelm1",
            'type' => "itp_type_head_armor",
            'game_id' => 1061,
            'image' => "/storage/items/greathelm1.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'code_name' => "kettlehatfacebyrnie",
            'name' => "kettlehatfacebyrnie",
            'type' => "itp_type_head_armor",
            'game_id' => 1062,
            'image' => "/storage/items/kettlehatfacebyrnie.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'code_name' => "bolzanobucket",
            'name' => "bolzanobucket",
            'type' => "itp_type_head_armor",
            'game_id' => 1063,
            'image' => "/storage/items/bolzanobucket.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'code_name' => "normanpepperpot",
            'name' => "normanpepperpot",
            'type' => "itp_type_head_armor",
            'game_id' => 1064,
            'image' => "/storage/items/normanpepperpot.png",
            'price' => 750,
        ]);

        DB::table('items')->UpdateOrInsert([
            'code_name' => "greathelmwhat",
            'name' => "greathelmwhat",
            'type' => "itp_type_head_armor",
            'game_id' => 1065,
            'image' => "/storage/items/greathelmwhat.png",
            'price' => 750,
        ]);

        $item = Item::firstOrNew(array('code_name' => "col1_kettlehat2"));
        $item->code_name = "col1_kettlehat2";
        $item->name = "col1_kettlehat2";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1066;
        $item->image = "/storage/items/col1_kettlehat2.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "fullfacecoif"));
        $item->code_name = "fullfacecoif";
        $item->name = "fullfacecoif";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1067;
        $item->image = "/storage/items/fullfacecoif.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "weimarhelm"));
        $item->code_name = "weimarhelm";
        $item->name = "weimarhelm";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1068;
        $item->image = "/storage/items/weimarhelm.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "open_salet_coif"));
        $item->code_name = "open_salet_coif";
        $item->name = "open_salet_coif";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1069;
        $item->image = "/storage/items/open_salet_coif.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "crownedhelm"));
        $item->code_name = "crownedhelm ";
        $item->name = "crownedhelm ";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1070;
        $item->image = "/storage/items/crownedhelm.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "frenchpepperpot2"));
        $item->code_name = "frenchpepperpot2 ";
        $item->name = "frenchpepperpot2 ";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1071;
        $item->image = "/storage/items/frenchpepperpot2.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "inv_nikolskoe_helm"));
        $item->code_name = "inv_nikolskoe_helm ";
        $item->name = "inv_nikolskoe_helm ";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1072;
        $item->image = "/storage/items/inv_nikolskoe_helm.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "flattophelmet"));
        $item->code_name = "flattophelmet ";
        $item->name = "flattophelmet ";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1073;
        $item->image = "/storage/items/flattophelmet.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "pepperpothelm1"));
        $item->code_name = "pepperpothelm1 ";
        $item->name = "pepperpothelm1 ";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1074;
        $item->image = "/storage/items/pepperpothelm1.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "inv_rus_helm"));
        $item->code_name = "inv_rus_helm";
        $item->name = "inv_rus_helm";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1075;
        $item->image = "/storage/items/inv_rus_helm.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "munitionshelm1"));
        $item->code_name = "munitionshelm1";
        $item->name = "munitionshelm1";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1076;
        $item->image = "/storage/items/munitionshelm1.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "normanhelmbalaclavacoif"));
        $item->code_name = "normanhelmbalaclavacoif";
        $item->name = "normanhelmbalaclavacoif";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1077;
        $item->image = "/storage/items/normanhelmbalaclavacoif.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "flemish_armet"));
        $item->code_name = "flemish_armet";
        $item->name = "flemish_armet";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1020;
        $item->image = "/storage/items/flemish_armet.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "great_bascinet"));
        $item->code_name = "great_bascinet";
        $item->name = "great_bascinet";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1021;
        $item->image = "/storage/items/greatbascinet1.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "bnw_armour_slashed"));
        $item->code_name = "bnw_armour_slashed";
        $item->name = "bnw_armour_slashed";
        $item->type = "itp_type_body_armor";
        $item->game_id = 1016;
        $item->image = "/storage/items/bnw_armour_slashed.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "brigandine_black_mail"));
        $item->code_name = "brigandine_black_mail";
        $item->name = "brigandine_black";
        $item->type = "itp_type_body_armor";
        $item->game_id = 969;
        $item->image = "/storage/items/brigandine_black_mail.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "brigandine_red"));
        $item->code_name = "brigandine_red";
        $item->name = "brigandine_red";
        $item->type = "itp_type_body_armor";
        $item->game_id = 963;
        $item->image = "/storage/items/brigandine_red.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "brigandine_green"));
        $item->code_name = "brigandine_green";
        $item->name = "brigandine_green";
        $item->type = "itp_type_body_armor";
        $item->game_id = 964;
        $item->image = "/storage/items/brigandine_green.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "brigandine_blue"));
        $item->code_name = "brigandine_blue";
        $item->name = "brigandine_blue";
        $item->type = "itp_type_body_armor";
        $item->game_id = 965;
        $item->image = "/storage/items/brigandine_blue.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "churburg_13"));
        $item->code_name = "churburg_13";
        $item->name = "churburg_13";
        $item->type = "itp_type_body_armor";
        $item->game_id = 941;
        $item->image = "/storage/items/churburg_13.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "churburg_13_mail"));
        $item->code_name = "churburg_13_mail";
        $item->name = "churburg_13_mail";
        $item->type = "itp_type_body_armor";
        $item->game_id = 943;
        $item->image = "/storage/items/churburg_13_mail.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "corrazina_red"));
        $item->code_name = "corrazina_red";
        $item->name = "corrazina_red";
        $item->type = "itp_type_body_armor";
        $item->game_id = 937;
        $item->image = "/storage/items/corrazina_red.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "corrazina_green"));
        $item->code_name = "corrazina_green";
        $item->name = "corrazina_green";
        $item->type = "itp_type_body_armor";
        $item->game_id = 938;
        $item->image = "/storage/items/corrazina_green.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "corrazina_grey"));
        $item->code_name = "corrazina_grey";
        $item->name = "corrazina_grey";
        $item->type = "itp_type_body_armor";
        $item->game_id = 939;
        $item->image = "/storage/items/corrazina_grey.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "early_transitional_blue"));
        $item->code_name = "early_transitional_blue";
        $item->name = "early_transitional_blue";
        $item->type = "itp_type_body_armor";
        $item->game_id = 945;
        $item->image = "/storage/items/early_transitional_blue.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "early_transitional_orange"));
        $item->code_name = "early_transitional_orange";
        $item->name = "early_transitional_orange";
        $item->type = "itp_type_body_armor";
        $item->game_id = 946;
        $item->image = "/storage/items/early_transitional_orange.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "early_transitional_white"));
        $item->code_name = "early_transitional_white";
        $item->name = "early_transitional_white";
        $item->type = "itp_type_body_armor";
        $item->game_id = 947;
        $item->image = "/storage/items/early_transitional_white.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "gambeson"));
        $item->code_name = "gambeson";
        $item->name = "gambeson";
        $item->type = "itp_type_body_armor";
        $item->game_id = 944;
        $item->image = "/storage/items/gambeson.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "gothic_armour"));
        $item->code_name = "gothic_armour";
        $item->name = "gothic_armour";
        $item->type = "itp_type_body_armor";
        $item->game_id = 1015;
        $item->image = "/storage/items/gothic_armour.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "kuyak_a"));
        $item->code_name = "kuyak_a";
        $item->name = "kuyak_a";
        $item->type = "itp_type_body_armor";
        $item->game_id = 932;
        $item->image = "/storage/items/kuyak_a.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "kuyak_b"));
        $item->code_name = "kuyak_b";
        $item->name = "kuyak_b";
        $item->type = "itp_type_body_armor";
        $item->game_id = 933;
        $item->image = "/storage/items/kuyak_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "milanese_armour"));
        $item->code_name = "milanese_armour";
        $item->name = "milanese_armour";
        $item->type = "itp_type_body_armor";
        $item->game_id = 1014;
        $item->image = "/storage/items/milanese_armour.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "rus_lamellar_b"));
        $item->code_name = "rus_lamellar_b";
        $item->name = "rus_lamellar_b";
        $item->type = "itp_type_body_armor";
        $item->game_id = 931;
        $item->image = "/storage/items/rus_lamellar_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "rus_scale"));
        $item->code_name = "rus_scale";
        $item->name = "rus_scale";
        $item->type = "itp_type_body_armor";
        $item->game_id = 934;
        $item->image = "/storage/items/rus_scale.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "eyeslot_kettlehat"));
        $item->code_name = "eyeslot_kettlehat";
        $item->name = "rus_scale";
        $item->type = "itp_type_head_armor";
        $item->game_id = 1007;
        $item->image = "/storage/items/eyeslot_kettlehat.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "bnw_gauntlet_L"));
        $item->code_name = "bnw_gauntlet_L";
        $item->name = "bnw_gauntlet_L";
        $item->type = "itp_type_hand_armor";
        $item->game_id = 1010;
        $item->image = "/storage/items/bnw_gauntlet_L.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "demi_gauntlets"));
        $item->code_name = "demi_gauntlets";
        $item->name = "demi_gauntlets";
        $item->type = "itp_type_hand_armor";
        $item->game_id = 982;
        $item->image = "/storage/items/demi_gauntlets.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "hourglass_gauntlets_ornate"));
        $item->code_name = "hourglass_gauntlets_ornate";
        $item->name = "hourglass_gauntlets_ornate";
        $item->type = "itp_type_hand_armor";
        $item->game_id = 959;
        $item->image = "/storage/items/hourglass_gauntlets_ornate.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "mail_gauntlets"));
        $item->code_name = "mail_gauntlets";
        $item->name = "mail_gauntlets";
        $item->type = "itp_type_hand_armor";
        $item->game_id = 958;
        $item->image = "/storage/items/mail_gauntlets.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "plate_mittens_L"));
        $item->code_name = "plate_mittens_L";
        $item->name = "plate_mittens_L";
        $item->type = "itp_type_hand_armor";
        $item->game_id = 1009;
        $item->image = "/storage/items/plate_mittens_L.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "leather_boots"));
        $item->code_name = "leather_boots";
        $item->name = "leather_boots";
        $item->type = "itp_type_foot_armor";
        $item->game_id = 980;
        $item->image = "/storage/items/leather_boots.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "rus_cav_boots"));
        $item->code_name = "rus_cav_boots";
        $item->name = "rus_cav_boots";
        $item->type = "itp_type_foot_armor";
        $item->game_id = 929;
        $item->image = "/storage/items/rus_cav_boots.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "rus_shoes"));
        $item->code_name = "rus_shoes";
        $item->name = "rus_shoes";
        $item->type = "itp_type_foot_armor";
        $item->game_id = 928;
        $item->image = "/storage/items/rus_shoes.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "rus_splint_greaves"));
        $item->code_name = "rus_splint_greaves";
        $item->name = "rus_splint_greaves";
        $item->type = "itp_type_foot_armor";
        $item->game_id = 936;
        $item->image = "/storage/items/rus_splint_greaves.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "shynbaulds"));
        $item->code_name = "shynbaulds";
        $item->name = "shynbaulds";
        $item->type = "itp_type_foot_armor";
        $item->game_id = 949;
        $item->image = "/storage/items/shynbaulds.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "splinted_greaves_spurs"));
        $item->code_name = "splinted_greaves_spurs";
        $item->name = "splinted_greaves_spurs";
        $item->type = "itp_type_foot_armor";
        $item->game_id = 948;
        $item->image = "/storage/items/splinted_greaves_spurs.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "steel_greaves"));
        $item->code_name = "steel_greaves";
        $item->name = "steel_greaves";
        $item->type = "itp_type_foot_armor";
        $item->game_id = 978;
        $item->image = "/storage/items/steel_greaves.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "steel_greaves2"));
        $item->code_name = "steel_greaves2";
        $item->name = "steel_greaves2";
        $item->type = "itp_type_foot_armor";
        $item->game_id = 979;
        $item->image = "/storage/items/steel_greaves2.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "chekan_pure_a"));
        $item->code_name = "chekan_pure_a";
        $item->name = "steel_greaves2";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 493;
        $item->image = "/storage/items/chekan_pure_a.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "crusader_sword"));
        $item->code_name = "crusader_sword";
        $item->name = "crusader_sword";
        $item->type = "itp_type_two_handed_wpn";
        $item->game_id = 1046;
        $item->image = "/storage/items/crusader_sword.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "danish_greatsword"));
        $item->code_name = "danish_greatsword";
        $item->name = "danish_greatsword";
        $item->type = "itp_type_two_handed_wpn";
        $item->game_id = 1035;
        $item->image = "/storage/items/danish_greatsword.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "elegant_poleaxe"));
        $item->code_name = "elegant_poleaxe";
        $item->name = "elegant_poleaxe";
        $item->type = "itp_type_polearm";
        $item->game_id = 1023;
        $item->image = "/storage/items/elegant_poleaxe.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "english_bill"));
        $item->code_name = "english_bill";
        $item->name = "english_bill";
        $item->type = "itp_type_polearm";
        $item->game_id = 1027;
        $item->image = "/storage/items/english_bill.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "english_longsword"));
        $item->code_name = "english_longsword";
        $item->name = "english_longsword";
        $item->type = "itp_type_two_handed_wpn";
        $item->game_id = 1038;
        $item->image = "/storage/items/english_longsword.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "espada_eslavona"));
        $item->code_name = "espada_eslavona";
        $item->name = "espada_eslavona";
        $item->type = "itp_type_two_handed_wpn";
        $item->game_id = 1036;
        $item->image = "/storage/items/espada_eslavona.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "evr_musket_udarniy_a_I"));
        $item->code_name = "evr_musket_udarniy_a_I";
        $item->name = "Miquelet Musket";
        $item->type = "itp_type_crossbow";
        $item->game_id = 588;
        $item->image = "/storage/items/evr_musket_udarniy_a_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "evr_musket_udarniy_b_I"));
        $item->code_name = "evr_musket_udarniy_b_I";
        $item->name = "Miquelet Musket";
        $item->type = "itp_type_crossbow";
        $item->game_id = 713;
        $item->image = "/storage/items/evr_musket_udarniy_b_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "flamberge"));
        $item->code_name = "flamberge";
        $item->name = "flamberge";
        $item->type = "itp_type_polearm";
        $item->game_id = 1018;
        $item->image = "/storage/items/flamberge.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "german_bastard_sword"));
        $item->code_name = "german_bastard_sword";
        $item->name = "german_bastard_sword";
        $item->type = "itp_type_two_handed_wpn";
        $item->game_id = 1039;
        $item->image = "/storage/items/german_bastard_sword.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "german_poleaxe"));
        $item->code_name = "german_poleaxe";
        $item->name = "german_poleaxe";
        $item->type = "itp_type_polearm";
        $item->game_id = 1024;
        $item->image = "/storage/items/german_poleaxe.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "glaive_a"));
        $item->code_name = "glaive_a";
        $item->name = "glaive_a";
        $item->type = "itp_type_polearm";
        $item->game_id = 1031;
        $item->image = "/storage/items/glaive_a.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "glaive_b"));
        $item->code_name = "glaive_b";
        $item->name = "glaive_b";
        $item->type = "itp_type_polearm";
        $item->game_id = 1032;
        $item->image = "/storage/items/glaive_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "grosse_messer"));
        $item->code_name = "grosse_messer";
        $item->name = "grosse_messer";
        $item->type = "itp_type_two_handed_wpn";
        $item->game_id = 1047;
        $item->image = "/storage/items/grosse_messer.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "grosse_messer_b"));
        $item->code_name = "grosse_messer_b";
        $item->name = "grosse_messer_b";
        $item->type = "itp_type_two_handed_wpn";
        $item->game_id = 1048;
        $item->image = "/storage/items/grosse_messer_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "guisarme_a"));
        $item->code_name = "guisarme_a";
        $item->name = "guisarme_a";
        $item->type = "itp_type_polearm";
        $item->game_id = 1029;
        $item->image = "/storage/items/guisarme_a.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "irish_sword"));
        $item->code_name = "irish_sword";
        $item->name = "irish_sword";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 1049;
        $item->image = "/storage/items/irish_sword.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "italian_falchion"));
        $item->code_name = "italian_falchion";
        $item->name = "italian_falchion";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 1044;
        $item->image = "/storage/items/italian_falchion.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "italian_sword"));
        $item->code_name = "italian_sword";
        $item->name = "italian_sword";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 1044;
        $item->image = "/storage/items/italian_sword.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "east_arrows"));
        $item->code_name = "east_arrows";
        $item->name = "east_arrows";
        $item->type = "itp_type_arrows";
        $item->game_id = 161;
        $item->image = "/storage/items/kalmyk_kolchan_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "bad_arrows"));
        $item->code_name = "bad_arrows";
        $item->name = "Bad Arrows";
        $item->type = "itp_type_arrows";
        $item->game_id = 681;
        $item->image = "/storage/items/arrows_a_kolchan_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "khergit_arrows"));
        $item->code_name = "khergit_arrows";
        $item->name = "Tatar Arrows";
        $item->type = "itp_type_arrows";
        $item->game_id = 160;
        $item->image = "/storage/items/arrows_b_kolchan_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "barbed_arrows"));
        $item->code_name = "barbed_arrows";
        $item->name = "Barbed Arrows";
        $item->type = "itp_type_arrows";
        $item->game_id = 162;
        $item->image = "/storage/items/arrows_c_kolchan_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "bodkin_arrows"));
        $item->code_name = "bodkin_arrows";
        $item->name = "Bodkin Arrows";
        $item->type = "itp_type_arrows";
        $item->game_id = 163;
        $item->image = "/storage/items/arrows_d_kolchan_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "luk_c"));
        $item->code_name = "luk_c";
        $item->name = "Bow";
        $item->type = "itp_type_bow";
        $item->game_id = 619;
        $item->image = "/storage/items/kalmyk_naluch_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "zakaz_2stwol_koleso2"));
        $item->code_name = "zakaz_2stwol_koleso2";
        $item->name = "Double-barreled Wheellock Carbine";
        $item->type = "itp_type_crossbow";
        $item->game_id = 626;
        $item->image = "/storage/items/karabin_2stwolB_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "zakaz_2stwol_koleso"));
        $item->code_name = "zakaz_2stwol_koleso2";
        $item->name = "Double-barreled Dutch Carbine";
        $item->type = "itp_type_crossbow";
        $item->game_id = 628;
        $item->image = "/storage/items/karabin_2stwol_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "karabin"));
        $item->code_name = "karabin";
        $item->name = "Simple Wheellock Carbine";
        $item->type = "itp_type_crossbow";
        $item->game_id = 594;
        $item->image = "/storage/items/karabin_a_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "karabin_batarey_good"));
        $item->code_name = "karabin_batarey_good";
        $item->name = "Good Miquelet Carbine";
        $item->type = "itp_type_crossbow";
        $item->game_id = 600;
        $item->image = "/storage/items/karabin_batarey_good_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "karabin_batarey"));
        $item->code_name = "karabin_batarey";
        $item->name = "Miquelet Carbine";
        $item->type = "itp_type_crossbow";
        $item->game_id = 598;
        $item->image = "/storage/items/karabin_batarey_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "good_karabin"));
        $item->code_name = "good_karabin";
        $item->name = "Good Carbine";
        $item->type = "itp_type_crossbow";
        $item->game_id = 703;
        $item->image = "/storage/items/karabin_b_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "karabin_old_a"));
        $item->code_name = "karabin_old_a";
        $item->name = "Matchlock Carbine";
        $item->type = "itp_type_crossbow";
        $item->game_id = 590;
        $item->image = "/storage/items/karabin_old_a_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "kleymor_a"));
        $item->code_name = "m_kleymor";
        $item->name = "Claymore";
        $item->type = "itp_type_two_handed_wpn";
        $item->game_id = 511;
        $item->image = "/storage/items/kleymor_a.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "kosa"));
        $item->code_name = "kosa";
        $item->name = "kosa";
        $item->type = "itp_type_polearm";
        $item->game_id = 440;
        $item->image = "/storage/items/kosa.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "longbowman_sword"));
        $item->code_name = "longbowman_sword";
        $item->name = "longbowman_sword";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 1043;
        $item->image = "/storage/items/longbowman_sword.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "longsword_b"));
        $item->code_name = "longsword_b";
        $item->name = "longsword_b";
        $item->type = "itp_type_two_handed_wpn";
        $item->game_id = 1034;
        $item->image = "/storage/items/longsword_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "milanese_sword"));
        $item->code_name = "milanese_sword";
        $item->name = "milanese_sword";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 1042;
        $item->image = "/storage/items/milanese_sword.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "bad_luk"));
        $item->code_name = "bad_luk";
        $item->name = "Hunting Bow";
        $item->type = "itp_type_bow";
        $item->game_id = 727;
        $item->image = "/storage/items/luk_a_saadak_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "norm_luk"));
        $item->code_name = "norm_luk";
        $item->name = "Bow";
        $item->type = "itp_type_bow";
        $item->game_id = 728;
        $item->image = "/storage/items/luk_b_saadak_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "gud_luk"));
        $item->code_name = "gud_luk";
        $item->name = "Powerful Bow";
        $item->type = "itp_type_bow";
        $item->game_id = 729;
        $item->image = "/storage/items/luk_c_saadak_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "uber_luk"));
        $item->code_name = "uber_luk";
        $item->name = "Composite Bow";
        $item->type = "itp_type_bow";
        $item->game_id = 730;
        $item->image = "/storage/items/luk_d_saadak_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "norm_musket"));
        $item->code_name = "norm_musket";
        $item->name = "Musket";
        $item->type = "itp_type_crossbow";
        $item->game_id = 717;
        $item->image = "/storage/items/mushket_a_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "good_musket"));
        $item->code_name = "good_musket";
        $item->name = "Wheellock Musket";
        $item->type = "itp_type_crossbow";
        $item->game_id = 719;
        $item->image = "/storage/items/mushket_b_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "bad_musket"));
        $item->code_name = "bad_musket";
        $item->name = "Rusty Musket";
        $item->type = "itp_type_crossbow";
        $item->game_id = 707;
        $item->image = "/storage/items/mushket_old_a_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "t_bad_musket"));
        $item->code_name = "t_bad_musket";
        $item->name = "Rusty Musket";
        $item->type = "itp_type_crossbow";
        $item->game_id = 715;
        $item->image = "/storage/items/musket_turk_fitil_pure_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "turk_musket_fitil_b"));
        $item->code_name = "turk_musket_fitil_b";
        $item->name = "Good Matchlock Musket";
        $item->type = "itp_type_crossbow";
        $item->game_id = 578;
        $item->image = "/storage/items/musket_turk_fitil_rich_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "turk_musket_koleso"));
        $item->code_name = "turk_musket_koleso";
        $item->name = "Wheellock Musket";
        $item->type = "itp_type_crossbow";
        $item->game_id = 580;
        $item->image = "/storage/items/musket_turk_koleso_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "turk_musket"));
        $item->code_name = "turk_musket";
        $item->name = "Miquelet Musket";
        $item->type = "itp_type_crossbow";
        $item->game_id = 582;
        $item->image = "/storage/items/musket_turk_udarniy_a_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "turk_musket_b"));
        $item->code_name = "turk_musket_b";
        $item->name = "Good Miquelet Musket";
        $item->type = "itp_type_crossbow";
        $item->game_id = 584;
        $item->image = "/storage/items/musket_turk_udarniy_b_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "partisan"));
        $item->code_name = "partisan";
        $item->name = "partisan";
        $item->type = "itp_type_polearm";
        $item->game_id = 1033;
        $item->image = "/storage/items/partisan.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "good_p_palash"));
        $item->code_name = "good_p_palash";
        $item->name = "Good Broadsword";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 744;
        $item->image = "/storage/items/pehot_palash_rich_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "pika_b"));
        $item->code_name = "bad_pike";
        $item->name = "Old Pike";
        $item->type = "itp_type_polearm";
        $item->game_id = 768;
        $item->image = "/storage/items/pika_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "norm_pika"));
        $item->code_name = "norm_pika";
        $item->name = "Pike";
        $item->type = "itp_type_polearm";
        $item->game_id = 769;
        $item->image = "/storage/items/pika_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "good_pike_m"));
        $item->code_name = "good_pike_m";
        $item->name = "Balanced Pike";
        $item->type = "itp_type_polearm";
        $item->game_id = 770;
        $item->image = "/storage/items/pika_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "zakaz_2stwol_udar2"));
        $item->code_name = "zakaz_2stwol_udar2";
        $item->name = "Double-barreled Dutch Pistol";
        $item->type = "itp_type_crossbow";
        $item->game_id = 632;
        $item->image = "/storage/items/pistol_2stwolB_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "m_dwustwol_pistol"));
        $item->code_name = "m_dwustwol_pistol";
        $item->name = "Double-barreled Pistol";
        $item->type = "itp_type_crossbow";
        $item->game_id = 725;
        $item->image = "/storage/items/pistol_2stwol_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "old_pistol"));
        $item->code_name = "old_pistol";
        $item->name = "Old Pistol";
        $item->type = "itp_type_crossbow";
        $item->game_id = 602;
        $item->image = "/storage/items/pistol_pure_a_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "pistol"));
        $item->code_name = "pistol";
        $item->name = "Pistol";
        $item->type = "itp_type_crossbow";
        $item->game_id = 604;
        $item->image = "/storage/items/pistol_pure_b_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "pistol_b"));
        $item->code_name = "pistol_b";
        $item->name = "Pistol";
        $item->type = "itp_type_crossbow";
        $item->game_id = 606;
        $item->image = "/storage/items/pistol_pure_c_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "good_pistol"));
        $item->code_name = "good_pistol";
        $item->name = "Good Pistol";
        $item->type = "itp_type_crossbow";
        $item->game_id = 608;
        $item->image = "/storage/items/pistol_rich_a_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "good_pistol_b"));
        $item->code_name = "good_pistol_b";
        $item->name = "Good Pistol";
        $item->type = "itp_type_crossbow";
        $item->game_id = 610;
        $item->image = "/storage/items/pistol_rich_b_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "good_pistol_c"));
        $item->code_name = "good_pistol_c";
        $item->name = "Good Pistol";
        $item->type = "itp_type_crossbow";
        $item->game_id = 612;
        $item->image = "/storage/items/pistol_rich_c_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "poleaxe_a"));
        $item->code_name = "poleaxe_a";
        $item->name = "poleaxe_a";
        $item->type = "itp_type_polearm";
        $item->game_id = 1022;
        $item->image = "/storage/items/poleaxe_a.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "gusar_lanza_b"));
        $item->code_name = "gusar_lanza_b";
        $item->name = "Hussar Lance";
        $item->type = "itp_type_polearm";
        $item->game_id = 501;
        $item->image = "/storage/items/pol_gusar_lansa_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "gusar_lanza_b"));
        $item->code_name = "gusar_lanza_b";
        $item->name = "Hussar Lance";
        $item->type = "itp_type_polearm";
        $item->game_id = 501;
        $item->image = "/storage/items/pol_gusar_lansa_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "bad_sablya_b"));
        $item->code_name = "bad_sablya_b";
        $item->name = "Rusty Saber";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 748;
        $item->image = "/storage/items/polyak_sablya_pure_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "norm_sablya_b"));
        $item->code_name = "norm_sablya_b";
        $item->name = "Saber";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 749;
        $item->image = "/storage/items/polyak_sablya_pure_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "good_sablya_b"));
        $item->code_name = "good_sablya_b";
        $item->name = "Good Saber";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 750;
        $item->image = "/storage/items/polyak_sablya_pure_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "bolts"));
        $item->code_name = "bolts";
        $item->name = "Bullets";
        $item->type = "itp_type_bullets";
        $item->game_id = 164;
        $item->image = "/storage/items/porohovnitsa_1.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "practice_sword"));
        $item->code_name = "practice_sword";
        $item->name = "Bullets";
        $item->type = "itp_type_two_handed_wpn";
        $item->game_id = 17;
        $item->image = "/storage/items/practice_sword.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "rondel_dagger"));
        $item->code_name = "rondel_dagger";
        $item->name = "rondel_dagger";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 1052;
        $item->image = "/storage/items/rondel_dagger.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "samopal"));
        $item->code_name = "samopal";
        $item->name = "samopal";
        $item->type = "itp_type_crossbow";
        $item->game_id = 564;
        $item->image = "/storage/items/samopal_a_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "samopal_b"));
        $item->code_name = "samopal_b";
        $item->name = "samopal";
        $item->type = "itp_type_crossbow";
        $item->game_id = 566;
        $item->image = "/storage/items/samopal_b_I.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "scottish_sword"));
        $item->code_name = "scottish_sword";
        $item->name = "scottish_sword";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 1045;
        $item->image = "/storage/items/scottish_sword.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "scott_palash"));
        $item->code_name = "scott_palash";
        $item->name = "scott_palash";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 510;
        $item->image = "/storage/items/scott_palash.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "side_sword"));
        $item->code_name = "side_sword";
        $item->name = "side_sword";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 1041;
        $item->image = "/storage/items/side_sword.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "simple_poleaxe"));
        $item->code_name = "simple_poleaxe";
        $item->name = "simple_poleaxe";
        $item->type = "itp_type_polearm";
        $item->game_id = 1025;
        $item->image = "/storage/items/simple_poleaxe.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "pike"));
        $item->code_name = "pike";
        $item->name = "pike";
        $item->type = "itp_type_polearm";
        $item->game_id = 523;
        $item->image = "/storage/items/spear_a_3m.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "swiss_halberd"));
        $item->code_name = "swiss_halberd";
        $item->name = "swiss_halberd";
        $item->type = "itp_type_polearm";
        $item->game_id = 1028;
        $item->image = "/storage/items/swiss_halberd.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "good_toporik"));
        $item->code_name = "good_toporik";
        $item->name = "good_toporik";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 757;
        $item->image = "/storage/items/toporik_rich_b.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "m_twohand_sword"));
        $item->code_name = "m_twohand_sword";
        $item->name = "m_twohand_sword";
        $item->type = "itp_type_two_handed_wpn";
        $item->game_id = 766;
        $item->image = "/storage/items/twohand_sword_a.png";
        $item->price = 750;
        $item->save();

        $item = Item::firstOrNew(array('code_name' => "wooden_stick"));
        $item->code_name = "wooden_stick";
        $item->name = "wooden_stick";
        $item->type = "itp_type_one_handed_wpn";
        $item->game_id = 422;
        $item->image = "/storage/items/wooden_stick.png";
        $item->price = 750;
        $item->save();

    }
}
