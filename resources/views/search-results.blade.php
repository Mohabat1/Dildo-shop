@extends('layout')

@section('content')
    <h2>Результаты поиска</h2>
    @if($products->isEmpty())
        <p>Ничего не найдено.</p>
    @else
        <ul>
            @foreach($products as $product)
                <li>{{ $product->name }} - {{ $product->price }} руб.</li>
            @endforeach
        </ul>
    @endif
@endsection
