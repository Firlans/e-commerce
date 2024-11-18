<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Models\Benners;
use App\Models\Book;

Route::get('/', function () {
    return view('homepage', [
        "promotion" => Benners::all(), 
        "image" => Benners::allImage(), 
        "books" => Book::all()
    ]);
});

Route::get("/products", function(){
    return view("products",  ["books" => Book::all()]);
});

Route::get("/product/{book_id}", function($book_id){
    return view("product",  ["book" => Book::first($book_id)]);
});

Route::get("/about", function(){
    return view("about");
});


Route::get("/book/add", function(){
    return view("addBook");
});

Route::post("/book/add", [BookController::class, "store"]);