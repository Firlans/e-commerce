<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $booksData = [
            [
                "title" => "Atomic Habits",
                "description" => "Panduan praktis untuk mengubah kebiasaan kecil menjadi pencapaian besar.",
                "price" => 100000,
                "image_cover_url" => "images/books/atomic-habbits.jpg",
            ],
            [
                "title" => "Rich Dad Poor Dad",
                "description" => "Buku tentang literasi finansial dan pola pikir kaya.",
                "price" => 120000,
                "image_cover_url" => "images/books/rich-dad-poor-dad.jpg",
            ],
            [
                "title" => "The Subtle Art of Not Giving a F*ck",
                "description" => "Berfokus pada cara menemukan prioritas dan ketenangan hidup.",
                "price" => 110000,
                "image_cover_url" => "images/books/subtle-art.jpg",
            ],
            [
                "title" => "Thinking, Fast and Slow",
                "description" => "Penjelasan mendalam tentang cara berpikir manusia.",
                "price" => 150000,
                "image_cover_url" => "images/books/thinking-fast-slow.jpg",
            ],
            [
                "title" => "Sapiens: A Brief History of Humankind",
                "description" => "Sejarah peradaban manusia dari perspektif evolusi.",
                "price" => 180000,
                "image_cover_url" => "images/books/sapiens.jpg",
            ],
            [
                "title" => "The Power of Now",
                "description" => "Tentang pentingnya hidup di masa kini untuk mencapai kedamaian.",
                "price" => 130000,
                "image_cover_url" => "images/books/power-of-now.jpg",
            ],
            [
                "title" => "Start with Why",
                "description" => "Bagaimana menemukan alasan mendalam di balik kesuksesan.",
                "price" => 140000,
                "image_cover_url" => "images/books/start-with-why.jpg",
            ],
            [
                "title" => "Man's Search for Meaning",
                "description" => "Kisah Viktor Frankl tentang makna hidup dalam kondisi ekstrem.",
                "price" => 125000,
                "image_cover_url" => "images/books/mans-search-for-meaning.jpg",
            ],
            [
                "title" => "Grit: The Power of Passion and Perseverance",
                "description" => "Pentingnya ketekunan dalam mencapai tujuan.",
                "price" => 115000,
                "image_cover_url" => "images/books/grit.jpg",
            ],
            [
                "title" => "Ikigai: The Japanese Secret to a Long and Happy Life",
                "description" => "Cara menemukan tujuan hidup untuk mencapai kebahagiaan.",
                "price" => 135000,
                "image_cover_url" => "images/books/ikigai.jpg",
            ]
        ];
        return fake()->randomElement($booksData);
    }
}
