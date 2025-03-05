<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Подключение стилей -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Подключение JS -->
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Подключение иконок -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark text-white">
<!-- Верхняя шапка -->
<div class="d-flex align-items-center justify-content-between pb-3 mb-4 border-bottom" style="padding: 12px 25px;">
    <!-- Логотип + Каталог -->
    <div class="d-flex align-items-center">
        <a href="/" class="d-flex align-items-center text-decoration-none me-3">
            <span class="fs-4 text-white">DILDO-SHOP</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="White" class="bi bi-box-seam-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.01-.003.268-.108a.75.75 0 0 1 .558 0l.269.108.01.003 6.97 2.789ZM10.404 2 4.25 4.461 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339L8 5.961 5.596 5l6.154-2.461L10.404 2Z"/>
            </svg>
        </a>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" id="catalogButton" style="background-color: #212529; color: #fff;">
                <i class="fa-solid fa-bars"></i> Каталог
            </button>
            <div class="dropdown-menu bg-dark text-white" id="catalogMenu">
                <a class="dropdown-item text-white" href="/catalog/vibro">Вибраторы</a>
                <a class="dropdown-item text-white" href="/catalog/masturb">Мастурбаторы</a>
                <a class="dropdown-item text-white" href="/catalog/Aksesuar">Аксессуары</a>
                <a class="dropdown-item text-white" href="/catalog/bdsm">БДСМ</a>
            </div>
        </div>
    </div>
    <!-- Поисковая строка -->
    <div class="flex-grow-1 mx-4">
        <form action="/search" method="GET" class="d-flex">
            <input type="text" name="query" class="form-control" placeholder="Искать товары и категории">
            <button type="submit" class="btn btn-dark">
                <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
    <!-- Профиль, Избранное, Корзина (исправлено!) -->
    <div class="d-flex align-items-center">
        <a href="/profile" class="text-white text-decoration-none me-3">
            <i class="fa-regular fa-user"></i> Профиль
        </a>
        <a href="/favorites" class="text-white text-decoration-none me-3">
            <i class="fa-regular fa-heart"></i> Избранное
        </a>
        <a href="/cart" class="text-white text-decoration-none">
            <i class="fa-solid fa-bag-shopping"></i> Корзина
        </a>
    </div>
</div>
<!-- Контент -->
<div class="container mx-auto p-6">
    @yield('main_content')
</div>
<!-- Футер -->
<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container">
        <div class="row">
            <!-- О нас -->
            <div class="col-md-3">
                <h5>О нас</h5>
                <ul class="list-unstyled">
                    <li><a href="/info" class="text-white text-decoration-none">О компании</a></li>
                    <li><a href="/info" class="text-white text-decoration-none">Вакансии</a></li>
                    <li><a href="/info" class="text-white text-decoration-none">Контакты и реквизиты</a></li>
                    <li><a href="/info" class="text-white text-decoration-none">Пункты выдачи заказов</a></li>
                </ul>
            </div>
            <!-- Покупателям -->
            <div class="col-md-3">
                <h5>Покупателям</h5>
                <ul class="list-unstyled">
                    <li><a href="/info" class="text-white text-decoration-none">Как сделать заказ?</a></li>
                    <li><a href="/info" class="text-white text-decoration-none">Как оплатить?</a></li>
                    <li><a href="/info" class="text-white text-decoration-none">Доставка</a></li>
                    <li><a href="/info" class="text-white text-decoration-none">Возврат</a></li>
                    <li><a href="/info" class="text-white text-decoration-none">Вопрос-ответ</a></li>
                    <li><a href="/info" class="text-white text-decoration-none">Связаться с нами</a></li>
                    <li><a href="/info" class="text-white text-decoration-none">Защита от мошенников</a></li>
                </ul>
            </div>
            <!-- Партнерам -->
            <div class="col-md-3">
                <h5>Партнёрам</h5>
                <ul class="list-unstyled">
                    <li><a href="/info" class="text-white text-decoration-none">Войти в личный кабинет</a></li>
                    <li><a href="/info" class="text-white text-decoration-none">Стать партнёром</a></li>
                    <li><a href="/info" class="text-white text-decoration-none">Логистика</a></li>
                </ul>
            </div>
            <!--  соцсети и отзыв -->
            <div class="col-md-3 text-center">
                <h5>Оставьте отзыв:</h5>
                <p>Мы ценим ваше мнение! Поделитесь отзывом о нашем магазине.</p>
                <a href="/review" class="text-white">
                    <i class="fa-regular fa-comments text-white fs-3"></i>
                </a>
                <div class="mt-3">
                    <h5>Мы в соцсетях:</h5>
                    <a href="https://vk.com/tudasyda22" class="me-2"><i class="fa-brands fa-vk text-white fs-3"></i></a>
                    <a href="https://t.me/+PHqUbIH99NIwZTM6"><i class="fa-brands fa-telegram text-white fs-3"></i></a>
                </div>
            </div>
            <!-- Нижний блок с соглашениями -->
            <div class="text-center mt-4">
                <a href="/privacy" class="text-white text-decoration-none">Соглашение о конфиденциальности</a> |
                <a href="/terms" class="text-white text-decoration-none">Пользовательское соглашение</a> |
                <a href="/recommendations" class="text-white text-decoration-none">Правила рекомендательных технологий</a>
            </div>
            <!-- Копирайт -->
            <div class="text-center mt-2">
                <small>© 2025 Dildo-shop. Все права защищены.</small>
            </div>
        </div>
</footer>
<!-- Подключение FontAwesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
</body>
</html>
