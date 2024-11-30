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
        $bookCategoryMappings = [
            // book_id => category_id(s)
            1 => [1], // "Atomic Habits" => "Self-Help" (contoh jika hanya mempunyai 1 kategori)
            2 => [1, 2], // "The Power of Now" => "Self-Help", "Mindfulness" (contoh jika memiliki lebih dari satu kategori)
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
