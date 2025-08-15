<?php

namespace App\Services\Product;

use Illuminate\Database\Eloquent\Builder;

class ProductService
{
    public function query(Builder $builder): Builder
    {
        return $builder
            ->with("file")
            ->where("is_available", true);
    }

    public function addFinalPrice($products)
    {
        return $products->transform(function ($product) {
            $price = $product->price;
            if ($product->discount) {
                $price -= ($price * $product->discount / 100);
            }
            $product->final_price = $price;
            return $product;
        });
    }
}

