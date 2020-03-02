<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function save_stats(Request $request)
    {
        dd($request->data);
    }
}
