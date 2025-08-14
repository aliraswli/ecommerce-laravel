<?php

namespace App\Services;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Database\Eloquent\Collection;

class CartService
{
    protected ?Cart $cart;

    public function __construct(?Cart $cart)
    {
        $this->cart = $cart;
    }

    public function items(): CartItem|Collection
    {
        return CartItem::query()
            ->where('cart_id', $this->cart?->id)
            ->with('product.file')
            ->get();
    }

    public function totalPrice()
    {
        return $this->items()->sum(function (CartItem $item) {
            return $item->product->price * $item->qty;
        });
    }

    public function totalDiscount()
    {
        return $this->items()->sum(function (CartItem $item) {
            $price = $item->product->price;
            $discountPercent = $item->product->discount ?? 0;
            return ($price * ($discountPercent / 100)) * $item->qty;
        });
    }

    public function finalPrice()
    {
        return $this->totalPrice() - $this->totalDiscount();
    }
}
