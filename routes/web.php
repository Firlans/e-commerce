<?php

use App\Http\Controllers\BookController;
use App\Models\Category;
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

Route::get('/products', [ProductsPageController::class, 'index'])->name('products.index');


Route::get("/product/{book_id}", function ($book_id) {
    return view("product", ["book" => Book::find($book_id)]);
});

Route::get("/about", function () {
    return view("about");
});