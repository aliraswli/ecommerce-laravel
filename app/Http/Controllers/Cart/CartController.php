<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $title = "سبد خرید";
        $cart = Cart::query()
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $cartItems = CartItem::query()
            ->where("cart_id", $cart->id)
            ->with("product.file")
            ->get();

        $totalPrice = $cartItems->sum(function (CartItem $item) {
            return $item->product->price * $item->qty;
        });

        $totalDiscount = $cartItems->sum(function (CartItem $item) {
            $price = $item->product->price;
            $discountPercent = $item->product->discount ?? 0;
            return ($price * ($discountPercent / 100)) * $item->qty;
        });

        $finalPrice = $totalPrice - $totalDiscount;

        return view('cart.index', compact(
            "title",
            "cartItems",
            "totalPrice",
            "totalDiscount",
            "finalPrice",
        ));
    }

    public function increment($id)
    {
        $item = CartItem::query()
            ->findOrFail($id);
        $item->qty += 1;
        $item->save();

        return redirect()->back()->withFragment('item-'.$id);
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

        return redirect()->back()->withFragment('item-'.$id);
    }
}
