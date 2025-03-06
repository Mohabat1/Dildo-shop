@extends('layout')

@section('title') Каталог @endsection

@section('main_content')
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <style>
        body {
            background-color: #212529;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .catalog {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }
        .category {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 20px;
            transition: 0.3s;
        }
        .category:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        .category img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<h1>Все категории</h1>
<div class="catalog">
    <div class="category">
        <img src="{{ asset('1.png') }}" alt="Игрушки для секса">
        <p>Игрушки для секса</p>
    </div>
    <div class="category">
        <img src="{{ asset('2.png') }}" alt="Эротические подарки">
        <p>Эротические подарки</p>
    </div>
    <div class="category">
        <img src="{{ asset('4.png') }}" alt="Презервативы">
        <p>Презервативы</p>
    </div>
    <div class="category">
        <img src="{{ asset('5.png') }}" alt="Наборы">
        <p>Наборы</p>
    </div>
    <div class="category">
        <img src="{{ asset('6.png') }}" alt="Интимная косметика">
        <p>Интимная косметика</p>
    </div>
    <div class="category">
        <img src="{{ asset('7.png') }}" alt="BDSM">
        <p>BDSM</p>
    </div>
    <div class="category">
        <img src="{{ asset('8.png') }}" alt="Интимная гигиена">
        <p>Интимная гигиена</p>
    </div>
    <div class="category">
        <a href="https://erolaif.ru/catalog/eroticheskaya-odezhda/" target="_blank">
            <img src="{{ asset('9.png') }}" alt="Возбуждающие препортаы">
        </a>
        <p>Возбуждающие препортаы</p>
    </div>
</div>
</body>
</html>
@endsection
