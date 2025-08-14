<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use App\Services\Product\ProductPriceService;
use Illuminate\Database\Eloquent\Collection;

class DashboardService
{
    protected ProductPriceService $priceService;

    public function __construct(ProductPriceService $priceService)
    {
        $this->priceService = $priceService;
    }

    function getPopularCategories(): Category|Collection
    {
        return Category::query()
            ->whereNull('parent_id')
            ->take(7)
            ->with("file")
            ->get();
    }

    function getLatestProducts(): Product|Collection
    {
        $result = Product::query()
            ->with("file")
            ->where("is_available", true)
            ->latest()
            ->limit(6)
            ->get();

        foreach ($result as $item) {
            $item->final_price = $this->priceService->calculateFinalPrice($item);
        }

        return $result;
    }
}

