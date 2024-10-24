<?php

namespace App\Models;

class Benners
{
    private $currentIndex = 0;
    public static function all()
    {
        return
            [
                "promotion" => "Promo terbatas",
                "tagLine" => "Flash Sale Buku Bestseller",
                "decription" => "Dapatkan diskon hingga 50% untuk koleksi buku terbaik minggu ini",
            ];
    }

    public static function allImage()
    {
        return [
            "images/atomic-habbits-book-promotion.jpeg",
            "images/sejarah-dunia-yang-disembunyikan-book-promotion.jpeg" 
        ];
    }
    
}