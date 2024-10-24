<?php

namespace App\Models;

class Books
{
    public static function all()
    {
        return [
            [
                "id" => 1,
                "title" => "Atomic Habits",
                "description" => "Panduan praktis untuk mengubah kebiasaan kecil menjadi pencapaian besar.",
                "price" => 100_000,
                "categories" => ["non-fiksi"],
                "image-cover-url" => "images/books/atomic-habbits.jpeg"
            ],
            [
                "id" => 2,
                "title" => "Rich Dad Poor Dad",
                "description" => "Buku tentang literasi finansial dan pola pikir kaya.",
                "price" => 120_000,
                "categories" => ["non-fiksi", "motivasi"],
                "image-cover-url" => "images/books/rich-dad-poor-dad.jpeg"
            ],
            [
                "id" => 3,
                "title" => "The Subtle Art of Not Giving a F*ck",
                "description" => "Berfokus pada cara menemukan prioritas dan ketenangan hidup.",
                "price" => 110_000,
                "categories" => ["non-fiksi", "self-help"],
                "image-cover-url" => "images/books/subtle-art.jpeg"
            ],
            [
                "id" => 4,
                "title" => "Thinking, Fast and Slow",
                "description" => "Penjelasan mendalam tentang cara berpikir manusia.",
                "price" => 150_000,
                "categories" => ["non-fiksi", "psikologi"],
                "image-cover-url" => "images/books/thinking-fast-slow.jpeg"
            ],
            [
                "id" => 5,
                "title" => "Sapiens: A Brief History of Humankind",
                "description" => "Sejarah peradaban manusia dari perspektif evolusi.",
                "price" => 180_000,
                "categories" => ["non-fiksi", "sejarah"],
                "image-cover-url" => "images/books/sapiens.jpeg"
            ],
            [
                "id" => 6,
                "title" => "The Power of Now",
                "description" => "Tentang pentingnya hidup di masa kini untuk mencapai kedamaian.",
                "price" => 130_000,
                "categories" => ["non-fiksi", "spiritualitas"],
                "image-cover-url" => "images/books/power-of-now.jpeg"
            ],
            [
                "id" => 7,
                "title" => "Start with Why",
                "description" => "Bagaimana menemukan alasan mendalam di balik kesuksesan.",
                "price" => 140_000,
                "categories" => ["non-fiksi", "bisnis"],
                "image-cover-url" => "images/books/start-with-why.jpeg"
            ],
            [
                "id" => 8,
                "title" => "Man's Search for Meaning",
                "description" => "Kisah Viktor Frankl tentang makna hidup dalam kondisi ekstrem.",
                "price" => 125_000,
                "categories" => ["non-fiksi", "psikologi"],
                "image-cover-url" => "images/books/mans-search-for-meaning.jpeg"
            ],
            [
                "id" => 9,
                "title" => "Grit: The Power of Passion and Perseverance",
                "description" => "Pentingnya ketekunan dalam mencapai tujuan.",
                "price" => 115_000,
                "categories" => ["non-fiksi", "motivasi"],
                "image-cover-url" => "images/books/grit.jpeg"
            ],
            [
                "id" => 10,
                "title" => "Ikigai: The Japanese Secret to a Long and Happy Life",
                "description" => "Cara menemukan tujuan hidup untuk mencapai kebahagiaan.",
                "price" => 135_000,
                "categories" => ["non-fiksi", "self-help"],
                "image-cover-url" => "images/books/ikigai.jpeg"
            ]
        ];
    }
}