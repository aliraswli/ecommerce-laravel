<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountRequestPost;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('web.account.index', compact('user'));
    }

    public function post(AccountRequestPost $request)
    {
        try {
            $data = $request->validated();
            $user = User::findOrFail(Auth::id());

            if ($user->only(array_keys($data)) === $data) {
                return back();
            }

            $user?->update($data);
            return back()->with([
                "success" => "اطلاعات حساب کاربری با موفقیت بروزرسانی شده."
            ]);
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return back()->withErrors([
                "general" => "مشکلی پیش آمد، لطفاً بعداً دوباره امتحان کنید."
            ]);
        }
    }
}
