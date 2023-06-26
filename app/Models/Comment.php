<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'bookId', 'emailCommentator', 'commentator', 'content'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'bookId');
    }
}
