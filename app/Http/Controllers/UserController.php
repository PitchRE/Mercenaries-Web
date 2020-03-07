<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class UserController extends Controller
{
    public function save_stats(Request $request)
    {
        $myJSON = json_decode($request->data);
        $r = $myJSON;
        $max_atributes = 0;
        $max_profi = 0;
        $max_skills = 0;
        $user = \Auth::user();

        $max_atributes = (int) $r->STR + (int) $r->AGI;
        $max_profi = (int) $r->Throwing + (int) $r->Firearms + (int) $r->Archery + (int) $r->Polearms + (int) $r->Two_Handed_Weapons + (int) $r->One_Handed_Weapons;
        $max_skills = (int) $r->Ironflesh + (int) $r->Shooting_from_Horseback + (int) $r->Power_Strike + (int) $r->Grenade_Throwing + (int) $r->Power_Draw + (int) $r->Shield + (int) $r->Athletics + (int) $r->Riding;

        // dd($max_atributes, $max_skills, $max_profi);
        if ($max_atributes > $user->level) {
            return Redirect::back()->withErrors("Something went wrong.. Reference code: max_atributes");
        }
        if ($max_skills > $user->level) {
            return Redirect::back()->withErrors("Something went wrong.. Reference code: max_skills");
        }
        if ($max_profi > 2 * $user->level) {
            return Redirect::back()->withErrors("Something went wrong.. Reference code: max_profi");
        }

        if ($r->Ironflesh > 10 || $r->Power_Strike > 10 || $r->Grenade_Throwing > 10 || $r->Power_Draw > 10 || $r->Shooting_from_Horseback > 10 || $r->Shield > 10 || $r->Athletics > 10 || $r->Riding > 10) {
            return Redirect::back()->withErrors("Something went wrong.. Reference code: >10");
        }

        $user->strength = $r->STR;
        $user->agility = $r->AGI;
        $user->Ironflesh = $r->Ironflesh;
        $user->PowerStrike = $r->Power_Strike;
        $user->PowerThrow = $r->Grenade_Throwing;
        $user->PowerDraw = $r->Power_Draw;
        $user->Shooting_from_Horseback = $r->Shooting_from_Horseback;
        $user->Shield = $r->Shield;
        $user->Athletics = $r->Athletics;
        $user->Riding = $r->Riding;
        $user->OneHanded = $r->One_Handed_Weapons;
        $user->TwoHanded = $r->Two_Handed_Weapons;
        $user->Polearms = $r->Polearms;
        $user->Archery = $r->Archery;
        $user->Throwing = $r->Throwing;
        $user->Firearms = $r->Firearms;
        $user->save();
        return Redirect::to('stats');

    }
}
