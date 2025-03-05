<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\CatalogController;

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('profile.partials.update-profile-information-form');
    })->name('profile.edit');

// Добавляем маршрут для PATCH-запроса
    Route::patch('/profile', function (Request $request) {
        $user = auth()->user();

        $validated = $request->validate([  // ✅ Теперь validate() работает
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update($validated);

        return redirect()->route('profile.edit')->with('success', 'Профиль обновлен!');
    })->name('update-profile');


});

Route::get('/abot', function () {
    return view('Abot');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/support', function () {
    return view('support');
});
use App\Http\Controllers\MainController;

Route::get('/review', [MainController::class, 'review'])->name('review');
Route::post('/review/check', [MainController::class, 'reviewCheck'])->name('review.check');

Route::get('/search', function (Request $request) {
    $query = $request->input('query');

    $products = Product::where('name', 'LIKE', "%{$query}%")
        ->orWhere('description', 'LIKE', "%{$query}%")
        ->get();

    return view('search-results', ['products' => $products]);
});
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::get('/favorites', function () {
    return view('favorites');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::view('/privacy', 'confidentiality.privacy')->name('privacy');
Route::view('/terms', 'confidentiality.terms')->name('terms');
Route::view('/recommendations', 'confidentiality.recommendations')->name('recommendations');

Route::get('/info/{section?}', function ($section = null) {
    return view('info', compact('section'));
})->name('info');


Route::get('/catalog/{category}', [CatalogController::class, 'index']);

// Подключаем маршруты аутентификации (login, register и т. д.)
require __DIR__.'/auth.php';
