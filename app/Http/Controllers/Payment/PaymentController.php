<?php

namespace App\Http\Controllers\Payment;

use App\Enums\OrderStatus;
use App\Enums\PaymentMethod;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Services\CartService;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cartService = new CartService($user->cart);

        if (empty($cartService->items()->toArray())) {
            return redirect()->route('cart.index');
        }

        return view('payment.index', [
            "title" => "سبد خرید",
            "cartItems" => $cartService->items(),
            "totalPrice" => $cartService->totalPrice(),
            "totalDiscount" => $cartService->totalDiscount(),
            "finalPrice" => $cartService->finalPrice(),
        ]);
    }

    public function post()
    {
        try {
            $user = Auth::user();
            $cart = $user->cart;
            $cartService = new CartService($cart);

            do {
                $code = strtoupper(Str::random(10));
            } while (Order::query()->where('tracking_code', $code)->exists());

            $order = new Order();
            $order->user_id = $user->id;
            $order->status = OrderStatus::PENDING;
            $order->tracking_code = $code;
            $order->payment_method = PaymentMethod::CASH;
            $order->total_amount = 0;
            // $user->addresses?->last()?->id
            $order->address_id = Address::query()
                ->where('user_id', $user->id)
                ->first()
                ->id;
            $order->save();

            foreach ($cartService->items() as $item) {
                $price = $item->product->price;

                $discountPercent = $item->product->discount ?? 0;
                $totalPrice = $price * $item->qty;
                if ($discountPercent > 0) {
                    $totalPrice = ($price * ($discountPercent / 100)) * $item->qty;
                }

                $orderItem = new OrderItem();
                $orderItem->order_id = $order->id;
                $orderItem->product_id = $item->product->id;
                $orderItem->qty = $item->qty;
                $orderItem->unit_price = $price;
                $orderItem->total_price = $totalPrice;
                $orderItem->save();
            }

            $data = Order::query()
                ->where('user_id', $user->id);

            $data->update([
                'total_amount' => $cartService->finalPrice(),
            ]);

            Cart::query()
                ->where('id', $cart->id)
                ->delete();

            return redirect()->route("orders.index");
        } catch (Exception $exception) {
            return back();
        }
    }
}

