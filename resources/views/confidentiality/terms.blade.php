@extends('layout')

@section('title', 'Пользовательское соглашение')

@section('main_content')
    <div class="container mx-auto p-6 bg-gray-900 text-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold border-b-2 border-gray-700 pb-3 mb-4">Пользовательское соглашение</h1>

        <p class="text-lg leading-relaxed">
            Используя наш сайт, вы соглашаетесь соблюдать правила и условия, указанные в этом документе.
            Наша платформа предназначена только для лиц, достигших 18 лет.
        </p>

        <div class="mt-4 p-4 bg-gray-800 rounded-lg">
            <h2 class="text-xl font-semibold text-yellow-400">Основные правила</h2>
            <ul class="list-disc pl-5 mt-2">
                <li>Запрещено размещение незаконного контента</li>
                <li>Запрещены любые формы мошенничества и обмана</li>
                <li>Все сделки совершаются на добровольной основе</li>
                <li>Администрация вправе приостанавливать или блокировать аккаунты за нарушение правил</li>
            </ul>
        </div>

        <div class="mt-4 p-4 bg-gray-800 rounded-lg">
            <h2 class="text-xl font-semibold text-yellow-400">Права и обязанности пользователей</h2>
            <p class="mt-2">
                Пользователь обязуется предоставлять достоверную информацию, соблюдать этические нормы общения
                и не использовать сервис в целях, противоречащих законодательству.
            </p>
        </div>

        <p class="mt-4 text-sm text-gray-400">Последнее обновление: {{ date('d.m.Y') }}</p>
    </div>
@endsection
