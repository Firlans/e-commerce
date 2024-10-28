<?php

use Illuminate\Support\Facades\Route;
use App\Models\Benners;
use App\Models\Books;

Route::get('/', function () {
    return view('homepage', [
        "promotion" => Benners::all(), 
        "image" => Benners::allImage(), 
        "books" => Books::all()
    ]);
});

Route::get("/products", function(){
    return view("products",  ["books" => Books::all()]);
});

Route::get("/product/{book_id}", function($book_id){
    return view("product",  ["book" => Books::book($book_id)]);
});

Route::get("/about", function(){
    return view("about");
});
