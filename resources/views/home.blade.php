@extends('layout')

@section('title') Home @endsection

@section('main_content')


    <section class="sale-banner">
        <div class="container text-center">
            <h1 class="sale-title">РАСПРОДАЖА</h1>
            <p class="sale-subtitle">Скидки на лучшие товары</p>
            <a href="{{ route('catalog', ['category' => 'BDSM']) }}" class="btn btn-outline-light">Смотреть товары</a>
        </div>
    </section>
    <div class="container my-5">
        <h2 class="text-center mb-4">Рекомендуемые товары</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            @php
                $products = [
                    ['id' => 1, 'name' => 'Анальная пробка', 'price' => '999 ₽', 'image' => asset('anal.png')],
                    ['id' => 2, 'name' => 'Вибратор', 'price' => '1999 ₽', 'image' => asset('vib.png')],
                    ['id' => 3, 'name' => 'Смазка 18 кг', 'price' => '499 ₽', 'image' => asset('favikini.png')],
                    ['id' => 4, 'name' => 'Фаллоимитатор', 'price' => '1499 ₽', 'image' => asset('fala.png')],
                ];
            @endphp

            @foreach($products as $product)
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text fw-bold">{{ $product['price'] }}</p>
                            <div class="d-flex justify-content-around">
                                <button class="btn btn-outline-dark add-to-cart" data-id="{{ $product['id'] }}">
                                    🛒
                                </button>
                                <button class="btn btn-outline-danger add-to-favorite" data-id="{{ $product['id'] }}">
                                    ❤️
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".add-to-cart").forEach(button => {
                button.addEventListener("click", function() {
                    let productId = this.getAttribute("data-id");
                    fetch("{{ route('cart.add') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({ id: productId })
                    }).then(response => response.json())
                        .then(data => alert(data.message));
                });
            });
            document.querySelectorAll(".add-to-favorite").forEach(button => {
                button.addEventListener("click", function() {
                    let productId = this.getAttribute("data-id");
                    fetch("{{ route('favorite.add') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({ id: productId })
                    }).then(response => response.json())
                        .then(data => alert(data.message));
                });
            });
        });
    </script>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 bg-light p-4">
                    <img src="{{ asset('privacy.png') }}" alt="Анонимность" class="img-fluid rounded">
                    <h5 class="mt-3">Абсолютная анонимность</h5>
                    <p>Абсолютная анонимность заказа, потому что будет упакован в коробку без опознавательных знаков.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 bg-light p-4">
                    <img src="{{ asset('quality.png') }}" alt="Гарантия качества" class="img-fluid rounded">
                    <h5 class="mt-3">Гарантия качества</h5>
                    <p>Мы за гарантию качества: отбираем товары вручную и продаем только сертифицированную продукцию.</p>
                </div>
            </div>
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
<style>
    .sale-banner {
        background: #212529;
        color: white;
        padding: 100px 0;
        text-align: center;
        position: relative;
    }

    .sale-title {
        font-size: 4rem;
        font-weight: bold;
        text-transform: uppercase;
        animation: fadeIn 1s ease-in-out;
    }

    .sale-subtitle {
        font-size: 1.5rem;
        margin-bottom: 20px;
        animation: fadeIn 1.5s ease-in-out;
    }

    .btn-light {
        font-size: 1.2rem;
        padding: 10px 30px;
        border-radius: 8px;
        text-decoration: none;
        background: white;
        color: #212529;
        font-weight: bold;
        transition: 0.3s;
        animation: fadeIn 2s ease-in-out;
    }

    .btn-light:hover {
        background: #f8f9fa;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card img {
        height: 250px;
        object-fit: cover;
    }

    .card {
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.05);
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".remove-from-favorites").forEach(button => {
            button.addEventListener("click", function() {
                let productId = this.getAttribute("data-id");

                fetch("{{ route('favorite.remove') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    },
                    body: JSON.stringify({ id: productId })
                }).then(response => response.json())
                    .then(data => {
                        alert(data.message);
                        location.reload(); // Обновляет страницу, чтобы убрать удаленный товар
                    });
            });
        });
    });
</script>

