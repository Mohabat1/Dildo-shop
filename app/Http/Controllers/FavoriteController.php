<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Product::where('in_favorites', true)->get();
        return view('favorites', compact('favorites'));
    }

    public function add(Request $request)
    {
        $product = Product::find($request->input('id'));

        if (!$product) {
            return response()->json(['message' => 'Товар не найден'], 404);
        }

        $product->in_favorites = true;
        $product->save();

        return response()->json(['message' => 'Товар добавлен в избранное']);
    }

    public function remove(Request $request)
    {
        $product = Product::find($request->input('id'));

        if (!$product) {
            return response()->json(['message' => 'Товар не найден'], 404);
        }

        $product->in_favorites = false;
        $product->save();

        return response()->json(['message' => 'Товар удален из избранного']);
    }
}
