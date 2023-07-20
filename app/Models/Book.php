<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    const STATUS_BOOK = [
        'COMPLETED' => 'COMPLETED',
        'UNCOMPLETED' => 'UNCOMPLETED',
        'DROP' => 'DROP',
        'INCOMMING' => 'INCOMMING'
    ];

    const IS_PUBLISH = [
        'PUBLISH' => 'PUBLISH',
        'DRAFT' => 'DRAFT'
    ];

    protected $fillable = ['name', 'author', 'genresList', 'collectionList', 'categoryId', 'rating', 'slug', 'description', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'bookSlug', 'slug');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'bookSlug', 'slug');
    }
}
