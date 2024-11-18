<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title'];
}
foreach ($books as $category){
    $bookModel = new \App\Models\Book;
    $bookModel->title = $category['title'];
    $bookModel->description = $category['description'];
    $bookModel->price = $category['price'];
    $bookModel->image_cover_url = $category['image_cover_url'];
    $bookModel->save();
}