<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "content", "slug", "chapterOrder", "bookSlug"
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'bookSlug', 'slug');
    }
}
