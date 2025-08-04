<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Discount;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $categories = Category::take(7)->with("files")->get();

        $amazingOffers = Discount::query()
            ->where("type", "=", "percentage")
            ->where("value", ">", "40")
            ->get();

        foreach ($amazingOffers as $amazingOffer) {
            dd($amazingOffer->product);
        }

        return view('dashboard.index', [
            "title" => "داشبورد",
            "categories" => $categories,
            "amazingOffers" => $amazingOffers,
        ]);
    }

//    public function store(Request $request)
//    {
//        $request->validate([
//            'name' => 'required|string|max:191|unique:categories',
//            'slug' => 'required|string|max:191|unique:categories',
//            'description' => 'nullable|string',
//            'images.*' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
//            'parent_id' => 'nullable|exists:categories,id',
//        ]);
//
//        $category = Category::create($request->only('name', 'slug', 'description', 'parent_id'));
//
//        if ($request->hasFile('images')) {
//            foreach ($request->file('images') as $image) {
//                $path = $image->store('images/categories', 'public');
//                $category->files()->create([
//                    'path' => $path,
//                    'type' => 'image',
//                    'description' => $request->input('image_description', 'تصویر دسته‌بندی'),
//                ]);
//            }
//        }
//
//        return redirect()->route('categories.index')->with('success', 'دسته‌بندی اضافه شد.');
//    }
}
