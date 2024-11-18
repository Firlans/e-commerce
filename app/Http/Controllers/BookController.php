<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BookController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        // Validasi input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image_cover_url' => 'required|url',
        ]);

        // Simpan buku
        $book = Books::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'image_cover_url' => $validatedData['image_cover_url'],
        ]);

        return response()->json([
            'message' => 'Book added successfully!',
            'book' => $book
        ], 201);
    }
}

