@extends('layout')

@section('title', 'Избранное')

@section('main_content')
    @if($favorites->count() > 0)
        <div class="container">
            <h3 class="mb-4">Ваши избранные товары</h3>
            <div class="row">
                @foreach($favorites as $product)
                    <div class="col-md-2 mb-3">
                        <div class="card h-100 border-0">
                            <img src="{{ asset('images/products/' . $product->image) }}" class="card-img-top" alt="Товар">
                            <div class="card-body text-center">
                                <h6 class="card-title">{{ $product->name }}</h6>
                                <button class="btn btn-light border btn-sm remove-from-favorites" data-id="{{ $product->id }}">
                                    <i class="fa-solid fa-heart text-danger"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="d-flex flex-column align-items-center justify-content-center" style="height: 60vh;">
            <i class="fa-solid fa-heart fa-3x text-danger mb-3"></i>
            <h3 class="mt-3">Добавьте то, что понравилось</h3>
            <a href="{{ route('home') }}" class="btn btn-danger">На главную</a>
        </div>
    @endif
@endsection

