<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function post(Request $request)
    {
        $productId = $request->product_id;

        $isFavorite = Auth::user()->favorites()->toggle($productId);

        $status = count($isFavorite['attached']) > 0;

        return response()->json(['status' => $status]);
    }
}

