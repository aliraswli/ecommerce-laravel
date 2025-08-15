<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddressRequest;
use App\Models\Address;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = Auth::user()->addresses;

        return view("web.account.address.index", compact("addresses"));
    }

    public function create()
    {
        return view("web.account.address.create");
    }

    public function store(StoreAddressRequest $request)
    {
        $data = $request->validated();
        $data["user_id"] = Auth::id();

        try {
            $address = Address::query()
                ->create($data);

            if ($address) {
                return redirect()
                    ->route("address.index")
                    ->with("success", "آدرس با موفقیت اضافه شد.");
            }
        } catch (Exception $exception) {
            Log::error($exception->getMessage());
            return back()->withErrors([
                "general" => "مشکلی پیش آمد، لطفاً بعداً دوباره امتحان کنید."
            ]);
        }

        return back();
    }
}
