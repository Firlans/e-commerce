<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                "title" => "Atomic Habits",
                "description" => "Panduan praktis untuk mengubah kebiasaan kecil menjadi pencapaian besar.",
                "price" => 100000,
                "image_cover_url" => "images/books/atomic-habbits.jpg",
            ],
            [
                "title" => "The Power of Now",
                "description" => "Tentang pentingnya hidup di masa kini untuk mencapai kedamaian.",
                "price" => 130000,
                "image_cover_url" => "images/books/power-of-now.jpg",
            ],
        ];
        
        foreach($books as $book){
            Book::create($book);
        }
    }
}
