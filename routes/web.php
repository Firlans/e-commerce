<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Benners;
use App\Models\Book;
use App\Http\Controllers\ProductsPageController;

Route::get('/', function () {
    return view('homepage', [
        "promotion" => Benners::all(),
        "image" => Benners::allImage(),
        "books" => Book::limit(8)->get()
    ]);
});

Route::get("/register", function () {
    return view("register");
});

Route::post('/register', [UserController::class, 'register']);

Route::get("/login", function () {
    return view("login");
})->name('login');
Route::post('/login', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [OrderController::class, 'index'])->name('orders.index');
});

Route::get('/products', [ProductsPageController::class, 'index'])->name('products.index');


Route::get("/product/{book_id}", function ($book_id) {
    return view("product", ["book" => Book::find($book_id)]);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [OrderController::class, 'index'])->name('orders.index');
    Route::post('/cart/add', [OrderController::class, 'addToCart'])->name('cart.add');
    Route::delete('/cart/{order}', [OrderController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/checkout/process', [CheckoutController::class, 'process'])
        ->name('checkout.process');
    Route::post('/checkout/callback', [CheckoutController::class, 'callback'])
        ->name('checkout.callback');
});

Route::get("/about", function () {
    return view("about");
});

Route::get('/orders', function () {
    return view('orders', [
        'orders' => collect([])
    ]);
});

