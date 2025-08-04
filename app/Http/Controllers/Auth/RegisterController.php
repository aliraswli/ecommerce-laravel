<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequestPost;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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

    public function post(RegisterRequestPost $request)
    {
        $data = $request->validated();

        try {
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);

            if ($user) {
                Log::log("کاربر ثبت نام شده است.", $data);
                return redirect()->route('auth.login');
            } else {
                $err = "مشکلی پیش آمده است.";
                return back()->withErrors(['general' => $err]);
            }

        } catch (Exception $exception) {
            Log::error($exception);

            $err = "مشکلی پیش آمده است. لطفا مجدد تلاش کنید.";
            return back()->withErrors(['general' => $err]);
        }
    }
}

