<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
class BookController
 extends Controller
{
    public function store(Request $request)
    {
        $book = Books::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'image_cover_url' => $request->image_cover_url
        ]);

        // Menambahkan kategori jika diperlukan
        $book->categories()->attach($request->category_id);

        return response()->json(['message' => 'Book added successfully!'], 200);
    }
}
