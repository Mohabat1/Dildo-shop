@extends('layout')

@section('title', 'Настройки профиля')

@section('main_content')
    <div class="container mt-5">
        <section class="bg-gray-800 text-white p-6 rounded-xl shadow-lg max-w-lg mx-auto">

            <header class="mb-6">
                <h2 class="text-2xl font-bold">Настройки профиля</h2>
                <p class="text-gray-400 text-sm">Обновите информацию о вашем аккаунте.</p>
            </header>

            <p class="text-red-500">Этот файл загружается</p>
            <form method="post" action="{{ route('update-profile') }}" class="space-y-4">
                @csrf
                @method('patch')

                <!-- Имя -->
                <div>
                    <label class="block text-gray-300 font-medium">Имя</label>
                    <input type="text" name="name" value="{{ auth()->user()->name }}"
                           style="background-color:#212529 ; color: white; border: 1px solid gray; padding: 10px; width: 100%;">




                </div>

                <!-- Email -->
                <div>
                    <label class="block text-gray-300 font-medium">Email</label>
                    <input type="text" name="name" value="{{ auth()->user()-> email}}"
                           style="background-color:#212529 ; color: white; border: 1px solid gray; padding: 10px; width: 100%;">


                </div>

                <!-- Кнопки -->
                <style>
                    .custom-btn {
                        background-color: #212529; /* Цвет фона сайта */
                        color: white; /* Белый текст */
                        padding: 8px 18px;
                        font-weight: 500;
                        border: 1px solid #6c757d; /* Тонкая обводка в цвете, близком к стилю сайта */
                        border-radius: 6px; /* Немного скругленные углы */
                        transition: background 0.3s ease-in-out, color 0.3s ease-in-out, border-color 0.3s ease-in-out;
                    }

                    .custom-btn:hover {
                        background-color: white; /* Белый фон при наведении */
                        color: #212529; /* Темный текст */
                        border-color: white; /* Белая обводка при наведении */
                    }

                    .custom-link {
                        background-color: #212529;
                        color: white;
                        padding: 8px 18px;
                        font-weight: 500;
                        border: 1px solid #6c757d;
                        border-radius: 6px;
                        text-decoration: none;
                        display: inline-block;
                        transition: background 0.3s ease-in-out, color 0.3s ease-in-out, border-color 0.3s ease-in-out;
                    }

                    .custom-link:hover {
                        background-color: white;
                        color: #212529;
                        border-color: white;
                    }
                </style>

                <div class="flex justify-between mt-6">
                    <button type="submit" class="custom-btn">
                        Сохранить
                    </button>
                    <a href="{{ route('dashboard') }}" class="custom-link">
                        Назад
                    </a>
                </div>
            </form>
        </section>
    </div>
@endsection


