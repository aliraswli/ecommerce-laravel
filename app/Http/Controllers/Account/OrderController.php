<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::query()
            ->where("user_id", auth()->user()->id)->get();

        return view("web.account.orders.index", compact(
            "orders",
        ));
    }
}
