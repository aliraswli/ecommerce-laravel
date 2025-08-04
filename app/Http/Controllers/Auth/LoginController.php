<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequestPost;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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

    public function post(LoginRequestPost $request)
    {
        $data = $request->validated();
        try {
            $user = User::query()
                ->where('username', $data["username"])
                ->first();

            if (!Hash::check($data["password"], $user->password)) {
                $err = "پسوورد وارد شده اشتباه میباشد.";
                return back()->withErrors(["general" => $err]);
            }

            Auth::login($user);
        } catch (Exception $exception) {
            Log::error($exception);
            return back()->withErrors(["general" => "مشکلی پیش آمده است."]);
        }

        return redirect()->route("user.dashboard");
    }
}
