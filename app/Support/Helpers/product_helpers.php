<?php

if (!function_exists('calculate_discount_price')) {
    function calculate_discount_price($price, ?int $discount): float
    {
        return $price - ($price * ($discount / 100));
    }
}
