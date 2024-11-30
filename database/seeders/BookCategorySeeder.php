<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO : hubungin buku dengan category buku berdasarkan kedua id table
        $bookCategoryMappings = [
            // book_id => category_id(s)
            1 => [1], // "Atomic Habits" => "Self-Help" (contoh jika hanya mempunyai 1 kategori)
            2 => [1, 2], // "The Power of Now" => "Self-Help", "Mindfulness" (contoh jika memiliki lebih dari satu kategori)
            3 => [9],
            4 => [6],
            5 => [3],
            6 => [3, 6],
            7 => [3],
            8 => [3],
            9 => [11, 12],
            10 => [3],
            11 => [4],
            12 => [4],
            13 => [4],
            14 => [1],
            15 => [6],
            16 => [6],
            17 => [4],
            18 => [4],
            19 => [5],
            20 => [6],
            21 => [6],
            22 => [6],
            23 => [3],
            24 => [3],
            25 => [3],
            26 => [3],
            27 => [3],
            28 => [4],
            29 => [13, 10],
            30 => [4, 3],

        ];

        foreach ($bookCategoryMappings as $bookId => $categoryIds) {
            foreach ($categoryIds as $categoryId) {
                BookCategory::create([
                    'book_id' => $bookId,
                    'category_id' => $categoryId
                ]);
            }
        }
    }
}
