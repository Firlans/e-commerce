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
    return view("products");
});

Route::get("/products/{book}", function(){
    return "this is book pagw";
});

Route::get("/about", function(){
    return view("about");
});
