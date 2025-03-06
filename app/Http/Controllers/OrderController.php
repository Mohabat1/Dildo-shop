<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function create()
    {
        return view('order.create');
    }

    public function store(Request $request)
    {
        // Валидация данных
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'payment' => 'required|in:card,cash',
        ]);

        // Создание заказа
        Order::create($request->all());

        // Перенаправление с сообщением
        return redirect()->route('order.create')->with('success', 'Ваш заказ оформлен!');
    }
}
