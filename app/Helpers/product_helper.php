<?php

if (!function_exists('productDiscountPrice')) {
    function productDiscountPrice($price, $discount): int
    {
        if (
            !isset($discount) || $discount == 0
        ) {
            return $price;
        }

        return $price * ($discount / 100);
    }
}

