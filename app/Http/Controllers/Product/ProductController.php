<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Product\ProductService;

class ProductController extends Controller
{
    public function index()
    {
        $service = new ProductService();
        $products = $service
            ->query(Product::query())
            ->get();

        $products = $service->addFinalPrice($products);

        return view("web.products.index", compact("products"));
    }

    public function show($id)
    {
        $product = Product::query()
            ->findOrFail($id);

        return view("web.products.details.index", compact("product"));
    }
}

