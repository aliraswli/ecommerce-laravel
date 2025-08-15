<?php

namespace App\Http\Controllers;

use App\Services\DashboardService;

class DashboardController extends Controller
{
    protected DashboardService $service;

    public function __construct(DashboardService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $title = "داشبورد";
        $popularCategories = $this->service->getPopularCategories();
        $latestProducts = $this->service->getLatestProducts();

        return view('web.dashboard.index', compact(
            'title',
            'popularCategories',
            'latestProducts'
        ));
    }
}
