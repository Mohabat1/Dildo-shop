@extends('layout')

@section('title', 'Оформление заказа')

@section('main_content')
    <div class="container mt-5">
        <h2>Оформление заказа</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('order.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Имя</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Телефон</label>
                <input type="tel" name="phone" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Адрес доставки</label>
                <textarea name="address" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Способ оплаты</label>
                <select name="payment" class="form-control" required>
                    <option value="card">Банковская карта</option>
                    <option value="cash">Наличные при получении</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Оформить заказ</button>
        </form>
    </div>
@endsection
