<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login", [
            "title" => "ورود",
            "hiddenHeader" => true,
            "hiddenFooter" => true,
        ]);
    }

    public function post(Request $request)
    {
        dd($request);
    }
}
