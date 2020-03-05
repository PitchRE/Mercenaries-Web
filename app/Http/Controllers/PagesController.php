<?php

namespace App\Http\Controllers;

use App\Item;
use App\kd_history;
use App\server;
use App\User;
use Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
        $users = User::all();
        $server = server::find(1);

        return view('welcome', compact('users', 'server'));
    }
    public function LoginView()
    {

        return view('auth.login');
    }

    public function marketplace(Request $request)
    {
        switch ($request->type) {
            case 'head':
                $Items = Item::Where('type', 'itp_type_head_armor')->get();
                break;
            case 'body':
                $Items = Item::Where('type', 'itp_type_body_armor')->get();
                break;
            case 'hands':
                $Items = Item::Where('type', 'itp_type_hand_armor')->get();
                break;
            case 'legs':
                $Items = Item::Where('type', 'itp_type_foot_armor')->get();
                break;
            case 'melee':
                $Items = Item::Where('type', 'itp_type_two_handed_wpn')->orWhere('type', 'itp_type_one_handed_wpn')->orWhere('type', 'itp_type_polearm')->get();
                break;
            case 'ammunition':
                $Items = Item::Where('type', 'itp_type_bullets')->orWhere('type', 'itp_type_arrows')->get();
                break;
            case 'ranged':
                $Items = Item::Where('type', 'itp_type_crossbow')->orWhere('type', 'itp_type_bow')->get();
                break;
            case 'thrown':
                $Items = Item::Where('type', 'itp_type_thrown')->get();
                break;
            case 'horse':
                $Items = Item::Where('type', 'itp_type_horse')->get();
                break;
            default:
                $Items = Item::all();
                break;
        }

        $user = Auth::user();
        return view('pages.marketplace', compact('Items', 'user'));
    }

    public function inventory()
    {
        $user = Auth::user();

        return view('pages.inventory', compact('user'));
    }

    public function stats()
    {
        $user = Auth::user();
        return view('pages.stats', compact('user'));
    }

    public function profile($id = null)
    {

        if ($id != null) {
            $user = User::find($id);
            if ($user == null) {
                return view('404')->withErrors('User not found.');
            }
        } else if (Auth::user() != null) {
            $user = Auth::user();

        } else {
            return redirect()->route('login_show');

        }
        $kd_history = kd_history::take(5)->get();

        $lowest = $kd_history->sortBy('kd')->values()->first();
        $highest = $kd_history->sortByDesc('kd')->values()->first();
        $lowest = $lowest->kd;
        $highest = $highest->kd;

        return view('pages.profile', compact('user', 'kd_history', 'lowest', 'highest'));
    }

}
