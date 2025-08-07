<?php

namespace App\Http\Controllers;

use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::take(7)->with("files")->get();

        return view('dashboard.index', [
            "title" => "داشبورد",
            "categories" => $categories,
        ]);
    }
}
