<?php

namespace App\Http\Controllers;

use App\Frag;
use App\Item;
use App\kd_history;
use App\server;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Response;

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
                $Items = Item::Where('type', 'itp_type_head_armor')->Where("buyable", true)->paginate(20);
                break;
            case 'body':
                $Items = Item::Where('type', 'itp_type_body_armor')->Where("buyable", true)->paginate(20);
                break;
            case 'hands':
                $Items = Item::Where('type', 'itp_type_hand_armor')->Where("buyable", true)->paginate(20);
                break;
            case 'legs':
                $Items = Item::Where('type', 'itp_type_foot_armor')->Where("buyable", true)->paginate(20);
                break;
            case 'melee':
                $Items = Item::Where('type', 'itp_type_two_handed_wpn')->orWhere('type', 'itp_type_one_handed_wpn')->orWhere('type', 'itp_type_polearm')->Where("buyable", true)->paginate(20);
                break;
            case 'ammunition':
                $Items = Item::Where('type', 'itp_type_bullets')->orWhere('type', 'itp_type_arrows')->orWhere('type', 'itp_type_bolts')->Where("buyable", true)->paginate(20);
                break;
            case 'ranged':
                $Items = Item::Where('type', 'itp_type_crossbow')->orWhere('type', 'itp_type_bow')->Where("buyable", true)->paginate(20);
                break;
            case 'thrown':
                $Items = Item::Where('type', 'itp_type_thrown')->paginate(20);
                break;
            case 'horse':
                $Items = Item::Where('type', 'itp_type_horse')->Where("buyable", true)->paginate(20);
                break;
            default:
                $Items = Item::Where("buyable", true)->paginate(20);
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
            return redirect()->route('login');

        }
        $kd_history = kd_history::take(5)->get();

        $lowest = $kd_history->sortBy('kd')->values()->first();
        $highest = $kd_history->sortByDesc('kd')->values()->first();
        $lowest = $lowest->kd;
        $highest = $highest->kd;
        $favWpn = Frag::select('weapon_id')
            ->groupBy('weapon_id')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(1)
            ->first();

        return view('pages.profile', compact('user', 'kd_history', 'lowest', 'highest', 'favWpn'));
    }

    public function download()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path() . "/storage/download/Mercenaries.zip";

        $headers = array(
            'Content-Type: application/zip',
        );

        return Response::download($file, 'Mercenaries.zip', $headers);
    }

}
