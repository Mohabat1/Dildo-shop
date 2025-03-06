<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;

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

Route::get('/review', [MainController::class, 'review'])->name('review');
Route::post('/review/check', [MainController::class, 'reviewCheck'])->name('review.check');

Route::get('/search', function (Request $request) {
    $query = $request->input('query');

    $products = Product::where('name', 'LIKE', "%{$query}%")
        ->orWhere('description', 'LIKE', "%{$query}%")
        ->get();

    return view('search-results', ['products' => $products]);
});


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

Route::get('/catalog/{category}', [CatalogController::class, 'index'])->name('catalog');


Route::get('/order', [OrderController::class, 'create'])->name('order.create');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');


Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites');
Route::post('/favorites/add', [FavoriteController::class, 'add'])->name('favorites.add');
Route::post('/favorites/remove', [FavoriteController::class, 'remove'])->name('favorites.remove');
Route::post('/favorites/add', [FavoriteController::class, 'add'])->name('favorite.add');
Route::post('/favorites/remove', [FavoriteController::class, 'remove'])->name('favorite.remove');





// Подключаем маршруты аутентификации (login, register и т. д.)
require __DIR__.'/auth.php';
