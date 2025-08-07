<?php

namespace App\Services\Product;

use App\Models\Product;

class ProductPriceService
{
    public function calculateFinalPrice(Product $product): float
    {
        $price = $product->price;

        if ($product->discount) {
            $price -= ($price * ($product->discount) / 100);
        }

        return $price;
    }
}

