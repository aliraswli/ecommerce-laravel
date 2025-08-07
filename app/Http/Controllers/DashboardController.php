<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Services\Product\ProductPriceService;
use Carbon\Carbon;

class DashboardController extends Controller
{
    protected ProductPriceService $priceService;

    public function __construct(ProductPriceService $priceService)
    {
        $this->priceService = $priceService;
    }

    public function index()
    {
        $mainCategories = Category::query()
            ->whereNull('parent_id')
            ->take(7)
            ->with("file")
            ->get();

        $categories = Category::query()
            ->whereNull('parent_id')
            ->with("categories")
            ->get();

        $latestProducts = Product::query()
            ->with("file")
            ->where("is_available", true)
            ->latest()
            ->limit(6)
            ->get();

        foreach ($latestProducts as $item) {
            $item->final_price = $this->priceService->calculateFinalPrice($item);
        }

        return view('dashboard.index', [
            "title" => "داشبورد",
            "mainCategories" => $mainCategories,
            "categories" => $categories,
            "latestProducts" => $latestProducts,
            "hottestProducts" => $latestProducts,
        ]);
    }
}
