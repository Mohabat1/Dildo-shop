@extends('layout')

@section('title', 'О нас, Покупателям, Партнёрам')

@section('main_content')
    <div class="container mt-5 text-white" style="background-color: #3a403d; padding: 20px; border-radius: 10px;">
        <h1 class="text-center mb-4">Информация</h1>

        <!-- Навигация -->
        <nav class="mb-4">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item"><a class="nav-link text-white" href="#about">О нас</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#customers">Покупателям</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#partners">Партнёрам</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#feedback">Оставить отзыв</a></li>
            </ul>
        </nav>

        <!-- О нас -->
        <section id="about" class="mb-5">
            <h2>О нас</h2>
            <p><strong>О компании:</strong> Мы - надёжный маркетплейс, предоставляющий широкий ассортимент товаров. Наша цель - сделать ваш опыт покупок удобным и приятным.На площадке представлены миллионы товаров: здесь можно купить дилдо вибратор, страпон, товары для взрослых, смазку, зоотовары, инструменты, материалы для строительства, дачных работ и многое другое — ассортимент постоянно расширяется.</p>
            <p><strong>Вакансии:</strong> Мы всегда в поиске талантливых специалистов. Если хотите работать с нами, свяжитесь с нашим HR-отделом.Если вакансия вашей мечты у нас пока не открыта, пришлите свое резюме в резерв любым удобным вам способом:

                Telegram: @rubdure

                WhatsApp: +7 (937) 777-33-78

                Наш телефон: 8 937) 777-33-78</p>
            <p><strong>Контакты и реквизиты:</strong> Свяжитесь с нами по телефону, электронной почте или через форму обратной связи.Клиентская поддержка
                +7 (937) 777-33-78
                https://t.me/+PHqUbIH99NIwZTM6
                Пресс-служба
                dildo-shop.mail.ru
                Отдел кадров
                +7 (937) 777-33-78
                Отдел сопровождения партнеров
                dildo-biznes.mail.ru</p>
            <p><strong>Пункты выдачи заказов:</strong> Найдите ближайший пункт выдачи на нашей интерактивной карте.</p>
        </section>

        <!-- Покупателям -->
        <section id="customers" class="mb-5">
            <h2>Покупателям</h2>
            <p><strong>Как сделать заказ?</strong> Просто добавьте товар в корзину и оформите покупку в пару кликов.</p>
            <p><strong>Как оплатить?</strong> Мы принимаем карты, электронные кошельки и наличные при получении.</p>
            <p><strong>Доставка:</strong> Быстрая доставка по всей стране удобным для вас способом.</p>
            <p><strong>Возврат:</strong> Если товар не подошёл, у вас есть возможность вернуть его.</p>
            <p><strong>Вопрос-ответ:</strong> Найдите ответы на самые популярные вопросы.</p>
            <p><strong>Связаться с нами:</strong> Напишите нам в чат или на почту.</p>
            <p><strong>Защита от мошенников:</strong> Ваши платежи надёжно защищены.</p>
        </section>

        <!-- Партнёрам -->
        <section id="partners" class="mb-5">
            <h2>Партнёрам</h2>
            <p><strong>Войти в личный кабинет:</strong> Управляйте своими товарами и заказами в удобной системе.</p>
            <p><strong>Стать партнёром:</strong> Продавайте у нас! Подайте заявку на сотрудничество.</p>
            <p><strong>Логистика:</strong> Мы предлагаем удобные решения по доставке ваших товаров.</p>
        </section>

        <!-- Оставить отзыв -->
        <section id="feedback" class="mb-5">
            <h2>Оставьте отзыв</h2>
            <p>Мы ценим ваше мнение! Поделитесь впечатлениями о нашем магазине.</p>
            <form method="post" action="{{ route('review.check') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Ваш email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Введите email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Ваш отзыв</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Введите ваш отзыв" required></textarea>
                </div>
                <button type="submit" class="btn btn-light">Отправить</button>
            </form>
        </section>
    </div>
@endsection
