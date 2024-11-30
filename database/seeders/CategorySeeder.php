<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO : buatkan minimal 10 kategori
        $categories = [
            ['title' => 'Self-Help'],
            ['title' => 'Motivation']
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
