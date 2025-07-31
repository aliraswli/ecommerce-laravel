<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth.register", [
            "title" => "ثبت نام",
            "hiddenHeader" => true,
            "hiddenFooter" => true,
        ]);
    }

    public function post(Request $request)
    {
    }
}
