<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_category', 'category_id', 'book_id')
                    ->withTimestamps(); // Automatically manage created_at and updated_at
    }
    use HasFactory;
}
