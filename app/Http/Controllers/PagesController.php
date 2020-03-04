<?php

namespace App\Http\Controllers;

use App\Item;
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

}
