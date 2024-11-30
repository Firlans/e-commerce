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
        // TODO : tambahkan minimal 30 buku dengan struktur table berikut
        $books = [
            [
                "title" => "Atomic Habits",
                "publisher" => "Penguin Random House",
                "language" => "English",
                "isbn" => "9780735211292",
                "dimension" => "15.2 x 2.3 x 22.9 cm",
                "weight" => 350, // dalam gram
                "description" => "Panduan praktis untuk mengubah kebiasaan kecil menjadi pencapaian besar.",
                "price" => 100000,
                "image_cover_url" => "images/books/atomic-habbits.jpg",
                "pages" => 352
            ],
            [
                "title" => "The Power of Now",
                "publisher" => "New World Library",
                "language" => "English",
                "isbn" => "9781577314806",
                "dimension" => "14 x 2.3 x 21 cm",
                "weight" => 320, // dalam gram
                "description" => "Tentang pentingnya hidup di masa kini untuk mencapai kedamaian.",
                "price" => 130000,
                "image_cover_url" => "images/books/power-of-now.jpg",
                "pages" => 298
            ],
        ];
        
        foreach($books as $book){
            Book::create($book);
        }
    }
}
