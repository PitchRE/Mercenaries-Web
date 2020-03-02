<?php

namespace App\Http\Controllers;

use Auth;

class PagesController extends Controller
{
    public function LoginView()
    {
        return view('auth.login');
    }

    public function marketplace()
    {
        return view('pages.marketplace');
    }

    public function inventory()
    {
        return view('pages.inventory');
    }

    public function stats()
    {
        $user = Auth::user();
        return view('pages.stats', compact('user'));
    }

}
