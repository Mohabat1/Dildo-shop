@extends('layout')

@section('title', 'Соглашение о конфиденциальности')

@section('main_content')
    <div class="container mx-auto p-6 bg-gray-900 text-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold border-b-2 border-gray-700 pb-3 mb-4">Соглашение о конфиденциальности</h1>

        <p class="text-lg leading-relaxed">
            Ваши персональные данные защищены и используются только в рамках предоставления услуг нашего маркетплейса.
            Мы не передаем информацию третьим лицам без вашего согласия.
        </p>

        <div class="mt-4 p-4 bg-gray-800 rounded-lg">
            <h2 class="text-xl font-semibold text-yellow-400">Какие данные мы собираем?</h2>
            <ul class="list-disc pl-5 mt-2">
                <li>Email и контактные данные – для связи и идентификации пользователя</li>
                <li>IP-адрес и локация – для обеспечения безопасности и защиты от мошенничества</li>
                <li>История покупок и просмотров – для улучшения рекомендаций и персонализации</li>
            </ul>
        </div>

        <div class="mt-4 p-4 bg-gray-800 rounded-lg">
            <h2 class="text-xl font-semibold text-yellow-400">Как мы защищаем ваши данные?</h2>
            <p class="mt-2">
                Мы используем современные технологии шифрования и многоуровневую систему защиты, чтобы гарантировать сохранность вашей информации.
                Доступ к данным имеют только авторизованные сотрудники.
            </p>
        </div>

        <p class="mt-4 text-sm text-gray-400">Последнее обновление: {{ date('d.m.Y') }}</p>
    </div>
@endsection
