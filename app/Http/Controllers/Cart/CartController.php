<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use App\Services\CartService;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cartService = new CartService($user->cart);

        return view('cart.index', [
            "title" => "سبد خرید",
            "cartItems" => $cartService->items(),
            "totalPrice" => $cartService->totalPrice(),
            "totalDiscount" => $cartService->totalDiscount(),
            "finalPrice" => $cartService->finalPrice(),
        ]);
    }

    public function increment($id)
    {
        $item = CartItem::query()
            ->findOrFail($id);
        $item->qty += 1;
        $item->save();

        return redirect()->back()->withFragment('item-' . $id);
    }

    public function decrement($id)
    {
        $item = CartItem::query()
            ->findOrFail($id);

        if ($item->qty > 1) {
            $item->qty -= 1;
            $item->save();
        } else {
            $item->delete();
        }

        return redirect()->back()->withFragment('item-' . $id);
    }
}
