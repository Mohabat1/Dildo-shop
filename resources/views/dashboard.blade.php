@extends('layout')

@section('title', 'Dashboard')

@section('main_content')
    <div class="py-12">
        <div class="bg-gray-200 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("You're logged in!") }}
            </div>
        </div>
    </div>



@endsection
