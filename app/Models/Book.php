<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    const STATUS_BOOK = [
        'COMPLETED' => 0,
        'UNCOMPLETED' => 1,
        'DROP' => 2,
        'INCOMMING' => 3
    ];

    protected $fillable = ['name', 'author', 'genresList', 'categoryId', 'rating', 'slug', 'description', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'bookId');
    }
}
