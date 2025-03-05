@extends('layout')

@section('title', 'Регистрация')

@section('main_content')
    <div class="container mt-5">
        <h2>Регистрация</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="form-label">Имя</label>
                <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" required autofocus>
            </div>

            <!-- Email Address -->
            <div class="mt-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <!-- Password -->
            <div class="mt-3">
                <label for="password" class="form-label">Пароль</label>
                <input id="password" type="password" name="password" class="form-control" required>
            </div>

            <!-- Confirm Password -->
            <div class="mt-3">
                <label for="password_confirmation" class="form-label">Подтвердите пароль</label>
                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="{{ route('login') }}" class="text-sm text-gray-600">Уже есть аккаунт?</a>
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </div>
        </form>
    </div>
@endsection
