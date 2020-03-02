<?php

namespace App\Http\Controllers;

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

}
