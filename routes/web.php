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

Route::get('/contact', function () {
    return view('contact');
});
