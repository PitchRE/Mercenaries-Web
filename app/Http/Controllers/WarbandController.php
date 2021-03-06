<?php

namespace App\Http\Controllers;

use App\Frag;
use App\Item;
use App\User;
use Illuminate\Http\Request;

class WarbandController extends Controller
{
    public function checkplayer(Request $request)
    {

        error_log($request->name);
        $guid = $request->guid;
        $user = User::Where('unique_id', $guid)->first();

        if ($user == null) {
            $user = new User;

            $user->name = $request->name;
            $user->unique_id = $request->guid;
            $user->email = \Str::random(10) . '@none.com';
            $pass = \Str::random(6);
            $pass = strtolower($pass);
            $user->password = bcrypt($pass);
            $user->secret_key = $pass;
            $user->save();

            return "-2|{$request->pid}|{$request->guid}|{$user->secret_key}";

        } else {

            $helmet = $user->getHead()->ItemData->game_id ?? 1150;
            $armor = $user->getBody()->ItemData->game_id ?? 1104;
            $gloves = $user->getGloves()->ItemData->game_id ?? 0;
            $boots = $user->getBoots()->ItemData->game_id ?? 1164;
            $horse = $user->getHorse()->ItemData->game_id ?? 1168;

            $weapon_1 = $user->getWeapon1()->ItemData->game_id ?? 0;
            $weapon_2 = $user->getWeapon2()->ItemData->game_id ?? 0;
            $weapon_3 = $user->getWeapon3()->ItemData->game_id ?? 0;
            $weapon_4 = $user->getWeapon4()->ItemData->game_id ?? 0;

            if ($user->isHeavyArmored()) {
                $Athletics = $user->Athletics;
                $Athletics - 2;
                if ($Athletics < 0) {
                    $Athletics = 0;
                }

            } else {
                $Athletics = $user->Athletics;
            }

            return "0|{$request->pid}|{$helmet}|{$armor}|{$gloves}|{$boots}|{$weapon_1}|{$weapon_2}|{$weapon_3}|{$weapon_4}|{$horse}|1|{$user->exp}|{$user->level}|{$user->gold}|{$user->exp_next_level}|{$user->strength}|{$user->agility}|{$user->Ironflesh}|{$user->PowerStrike}|{$user->PowerThrow}|{$user->PowerDraw}|{$user->Shooting_from_Horseback}|{$user->Shield}|{$Athletics}|{$user->Riding}|{$user->OneHanded}|{$user->TwoHanded}|{$user->Polearms}|{$user->Archery}|{$user->Throwing}|{$user->Firearms}|{$user->secret_key}|{$user->isHeavyArmored()}";
        }
    }

    public function GiveEXP(Request $request)
    {

        $RoundResult = $request->result ?? null;

        $expgive = $request->exp;
        $kills = $request->kills;
        $deaths = $request->deaths;
        $guid = $request->guid;
        $user = User::Where('unique_id', $guid)->first();
        if ($user == null) {
            return;
        }
        if ($RoundResult != null) {

            if ($RoundResult == 0) {
                $user->increment('rounds_lost');
            } else {
                $user->increment('rounds_won');
            }
        }

        $exp = $user->exp;
        $needed_exp = $user->exp_next_level;
        $level = $user->level;

        $expgive = $expgive * 8.5;
        $expgive = round($expgive, 0);

        $exp_add = $exp + $expgive;

        if ($exp_add >= $needed_exp) {
            $exp = 0;
            $level = $level + 1;
            $needed_exp = $level * 50;
            $needed_exp = $needed_exp + 100;

            $user->exp_next_level = $needed_exp;
            $user->exp = 0;
            $user->increment('level');
            $user->increment('kills', $kills);
            $user->increment('deaths', $deaths);
            $user->save();
            return "2|$request->pid|1|$expgive|$user->level|$needed_exp|$kills|$deaths";
        } else {
            $user->increment('exp', $expgive);
            $user->increment('kills', $kills);
            $user->increment('deaths', $deaths);
            $leftexptolvlup = $needed_exp - $exp - $expgive;
            $user->save();

            return "2|$request->pid|0|$expgive|$level|$needed_exp|$kills|$deaths|$leftexptolvlup";

        }

    }

    public function GiveEarnings(Request $request)
    {

        $kills = $request->kills;
        $deaths = $request->deaths;
        $guid = $request->guid;
        $user = User::Where('unique_id', $guid)->first();
        if ($user == null) {
            return;
        }

        $user->increment('gold', $request->gold);
        return "1|$request->pid|$request->gold";

    }

    public function GiveFrag(Request $request)
    {
        $guid = $request->guid;
        $guid_death = $request->deathguid;
        $user = User::Where('unique_id', $guid)->first();
        $user_dead = User::Where('unique_id', $guid_death)->first();
        if ($user == null || $user_dead == null) {
            return "-3|";
        }

        $frag = new Frag;
        $frag->killer_id = $user->id;
        $frag->death_id = $user_dead->id;
        $tmp = Item::Where("game_id", $request->weaponid)->first();
        if ($tmp == null) {
            return "-3|";
        }

        $frag->weapon_id = $tmp->id;

        $frag->save();

        return "-3|";
    }

}
