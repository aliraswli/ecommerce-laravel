<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Product;
use App\Services\Product\ProductService;
use Illuminate\Database\Eloquent\Collection;

class DashboardService
{
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
        $service = new ProductService();
        $products = $service->query(Product::query())
            ->latest()
            ->limit(6)
            ->get();

        return $service->addFinalPrice($products);
    }
}

