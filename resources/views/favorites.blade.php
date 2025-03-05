@extends('layout')

@section('title', 'Избранное')

@section('main_content')
    @if(!empty($favoriteProducts))
        <div class="container">
            <h3 class="mb-4">Ваши избранные товары</h3>
            <div class="row">
                @foreach($favoriteProducts as $product)
                    <div class="col-md-2 mb-3">
                        <div class="card h-100 border-0">
                            <img src="{{ asset('images/products/default.jpg') }}" class="card-img-top" alt="Товар">
                            <div class="card-body text-center">
                                <h6 class="card-title">Название товара</h6>
                                <p class="text-warning mb-1">&starf; 5.0 (0 отзывов)</p>
                                <button class="btn btn-light border btn-sm">
                                    <i class="fa-solid fa-heart text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="d-flex flex-column align-items-center justify-content-center" style="height: 60vh;">
            <i class="fa-solid fa-heart fa-3x text-danger mb-3"></i> <!-- Иконка сердечка -->
            <img src="{{ asset('images/empty-favorites.png') }}" alt="Нет избранного" width="150">
            <h3 class="mt-3">Добавьте то, что понравилось</h3>
            <p class="text-white">Перейдите на главную страницу и нажмите на ♡ в товаре</p>
            <a href="{{ route('home') }}" class="btn btn-danger">На главную</a>
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
