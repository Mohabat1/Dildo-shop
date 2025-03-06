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
                                <button class="btn btn-light border btn-sm" onclick="removeFromCart({{ $item->id }})">Удалить</button>
                                <script>
                                    function removeFromCart(productId) {
                                        fetch("{{ route('cart.remove') }}", {
                                            method: "POST",
                                            headers: {
                                                "Content-Type": "application/json",
                                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                            },
                                            body: JSON.stringify({ id: productId })
                                        })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.message === 'Товар удален из корзины') {
                                                    alert(data.message);
                                                    // Обновите корзину или удалите товар из списка на странице
                                                } else {
                                                    alert(data.message);
                                                }
                                            })
                                            .catch(error => console.log('Error:', error));
                                    }
                                </script>
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
            <a href="{{ route('catalog', ['category' => 'BDSM']) }}" class="btn btn-danger">Перейти в каталог</a>
        </div>
    @endif
    <div class="container mt-5">
        <div class="row"> <!-- ОБЕРНУЛ В ROW -->
            <!-- Анонимность -->
            <div class="col-md-4">
                <div class="card border-0 bg-light p-4">
                    <img src="{{ asset('privacy.png') }}" alt="Анонимность" class="img-fluid rounded">
                    <h5 class="mt-3">Абсолютная анонимность</h5>
                    <p>Абсолютная анонимность заказа, потому что будет упакован в коробку без опознавательных знаков.</p>
                </div>
            </div>

            <!-- Гарантия качества -->
            <div class="col-md-4">
                <div class="card border-0 bg-light p-4">
                    <img src="{{ asset('quality.png') }}" alt="Гарантия качества" class="img-fluid rounded">
                    <h5 class="mt-3">Гарантия качества</h5>
                    <p>Мы за гарантию качества: отбираем товары вручную и продаем только сертифицированную продукцию.</p>
                </div>
            </div>

            <!-- Скидки и предложения -->
            <div class="col-md-4">
                <div class="card border-0 bg-light p-4">
                    <img src="{{ asset('discounts.png') }}" alt="Скидки и предложения" class="img-fluid rounded">
                    <h5 class="mt-3">Скидки и предложения</h5>
                    <p>Скидки клиентам за подписку на нашу рассылку, чтобы получать новости о скидках и распродажах.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
