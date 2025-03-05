<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
public function index()
{
$products = Product::all();
return view('home', compact('products'));
}
    public function search(Request $request)
    {
        $query = $request->input('query'); // Получаем поисковый запрос

        if (!$query) {
            return redirect()->route('home'); // Если запрос пустой, отправляем на главную
        }

        $products = Product::where('name', 'LIKE', "%$query%")->get(); // Ищем товары

        return view('home', compact('products'));
    }
}
