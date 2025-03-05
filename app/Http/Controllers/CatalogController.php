<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CatalogController extends Controller
{
    public function index($category)
    {
        $products = Product::where('category', $category)->get();

        // Проверяем, есть ли шаблон для конкретной категории
        $view = view()->exists("catalog.$category") ? "catalog.$category" : "catalog";

        return view($view, compact('products'));
    }
}
