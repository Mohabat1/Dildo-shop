<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Product::where('in_cart', true)->get();
        return view('cart', compact('cartItems'));
    }

    public function add(Request $request)
    {
        $product = Product::find($request->input('id'));

        if (!$product) {
            return response()->json(['message' => 'Товар не найден'], 404);
        }

        $product->in_cart = true;
        $product->save();

        return response()->json(['message' => 'Товар добавлен в корзину']);
    }

    public function remove(Request $request)
    {
        $product = Product::find($request->input('id'));

        if (!$product) {
            return response()->json(['message' => 'Товар не найден'], 404);
        }

        $product->in_cart = false;
        $product->save();

        return response()->json(['message' => 'Товар удален из корзины']);
    }
}



