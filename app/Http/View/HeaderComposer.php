<?php

namespace App\Http\View;

use App\Models\Category;
use Illuminate\View\View;

class HeaderComposer
{
    public function compose(View $view): void
    {
        $categories = Category::query()
            ->whereNull('parent_id')
            ->with("categories")
            ->get();

        $view->with(['categories' => $categories]);
    }
}
