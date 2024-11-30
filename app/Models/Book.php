<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'publisher', 'language', 'isbn', 'dimension', 'weight', 'description', 'price', 'image_cover_url'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_categories');
    }
}
