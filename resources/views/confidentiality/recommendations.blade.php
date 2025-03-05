@extends('layout')

@section('title', 'Правила рекомендательных технологий')

@section('main_content')
    <div class="container mx-auto p-6 bg-gray-900 text-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold border-b-2 border-gray-700 pb-3 mb-4">Правила рекомендательных технологий</h1>

        <p class="text-lg leading-relaxed">
            Мы используем алгоритмы машинного обучения для персонализированных рекомендаций.
            Ваши предпочтения анализируются, чтобы предлагать товары, которые могут вас заинтересовать.
        </p>

        <div class="mt-4 p-4 bg-gray-800 rounded-lg">
            <h2 class="text-xl font-semibold text-yellow-400">Как работают рекомендации?</h2>
            <ul class="list-disc pl-5 mt-2">
                <li>Анализируется история просмотров и покупок</li>
                <li>Рекомендации обновляются в реальном времени</li>
                <li>Вы можете отключить персонализацию в настройках</li>
            </ul>
        </div>

        <div class="mt-4 p-4 bg-gray-800 rounded-lg">
            <h2 class="text-xl font-semibold text-yellow-400">Как мы используем AI и машинное обучение?</h2>
            <p class="mt-2">
                Наши алгоритмы анализируют поведение пользователей, чтобы выявлять наиболее актуальные товары для вас.
                Мы постоянно совершенствуем систему, чтобы рекомендации были максимально точными.
            </p>
        </div>

        <p class="mt-4 text-sm text-gray-400">Последнее обновление: {{ date('d.m.Y') }}</p>
    </div>
@endsection
