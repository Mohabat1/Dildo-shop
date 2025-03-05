@extends('layout')

@section('title') review @endsection

@section('main_content')
    <h1>Оставте отзыв</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('review.check') }}">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
        <textarea name="message" id="message" class="form-control stylish-textarea" placeholder="Введите сообщение"></textarea>
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
            <button type="submit" class="custom-btn" style="margin-top: 10px;">
                Отправить
            </button>

            <h1>Все отзывы</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($reviews as $el)
                    <div class="col">
                        <div class="card shadow-sm border-0 p-3" style="background-color: #2c2f33; color: white; border-radius: 10px;">
                            <div class="card-body">
                                <h5 class="card-title text-warning">{{ $el->subject }}</h5>
                                <p class="mb-1 card-text">{{ $el->email }}</p>
                                <p class="card-text">{{ $el->message }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

@endsection
