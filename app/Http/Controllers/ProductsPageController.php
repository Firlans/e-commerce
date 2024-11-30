<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsPageController
{
    public function index(Request $request)
    {
        $query = $request->input('search'); // Pencarian
        $selectedCategories = $request->input('categories', []); // Kategori terpilih
        $minPrice = $request->input('min_price'); // Harga minimal
        $maxPrice = $request->input('max_price'); // Harga maksimal

        // Query untuk buku
        $books = Book::query()
            ->when($query, function ($q) use ($query) {
                $q->where('title', 'like', '%' . $query . '%'); // Filter pencarian
            })
            ->when($selectedCategories, function ($q) use ($selectedCategories) {
                $q->whereHas('categories', function ($q) use ($selectedCategories) {
                    $q->whereIn('categories.id', $selectedCategories); // Filter kategori
                });
            })
            ->when($minPrice, function ($q) use ($minPrice) {
                $q->where('price', '>=', $minPrice); // Filter harga minimal
            })
            ->when($maxPrice, function ($q) use ($maxPrice) {
                $q->where('price', '<=', $maxPrice); // Filter harga maksimal
            })
            ->paginate(10);

        // Semua kategori
        $categories = Category::all();

        if ($books->isEmpty()) {
            $books = '';
        }
        return view('products', [
            'books' => $books,
            'categories' => $categories,
            'search' => $query,
            'selectedCategories' => $selectedCategories,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice,
        ]);
    }
}
