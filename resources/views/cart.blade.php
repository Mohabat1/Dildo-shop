@extends('layout')

@section('title', 'Корзина')

@section('main_content')
    @if(!empty($cartItems) && count($cartItems) > 0)
        <div class="container">
            <h3 class="mb-4">Ваши товары в корзине</h3>
            <div class="row">
                @foreach($cartItems as $item)
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 border-0">
                            <img src="{{ asset('images/products/' . $item->image) }}" class="card-img-top" alt="{{ $item->name }}">
                            <div class="card-body text-center">
                                <h6 class="card-title">{{ Str::limit($item->name, 40) }}</h6>
                                <p class="text-warning mb-1">&starf; {{ $item->rating }} ({{ $item->reviews }} отзывов)</p>
                                <button class="btn btn-light border btn-sm">Удалить</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="d-flex flex-column align-items-center justify-content-center" style="height: 60vh;">
            <i class="fa-solid fa-cart-shopping fa-3x text-danger mb-3"></i> <!-- Иконка корзины -->
            <img src="{{ asset('images/empty-favorites.png') }}" alt="Нет товаров в корзине" width="200">
            <h3 class="mt-3">Ваша корзина пуста</h3>
            <p class="text-white">Перейдите в каталог и добавьте товары в корзину</p>
            <a href="{{ route('home') }}" class="btn btn-danger">Перейти в каталог</a>
        </div>
    @endif
    <div class="container my-5">
        <h2 class="text-center mb-4">Рекомендуемые товары</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @php
                $products = [
                    ['name' => 'Анальная пробка', 'price' => '999 ₽', 'image' => asset('anal.png')],
                    ['name' => 'Вибратор', 'price' => '1999 ₽', 'image' => asset('vib.png')],
                    ['name' => 'Смазка 18 кг', 'price' => '499 ₽', 'image' => asset('favikini.png')],
                    ['name' => 'Фаллоимитатор', 'price' => '1499 ₽', 'image' => asset('fala.png')],
                ];
            @endphp
            @foreach($products as $product)
                <div class="col">
                    <div class="card h-100 shadow-sm d-flex flex-column">
                        <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}" style="height: 250px; object-fit: cover;">
                        <div class="card-body d-flex flex-column text-center">
                            <h5 class="card-title flex-grow-1">{{ $product['name'] }}</h5>
                            <p class="card-text fw-bold">{{ $product['price'] }}</p>
                            <button class="btn btn-outline-light mt-auto">Купить</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
