<?php

namespace App\Transformers;

use App\Models\Comment;
use League\Fractal\TransformerAbstract;

class CommentTransformer extends TransformerAbstract
{

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Comment $comment)
    {
        return [
            'id' => $comment->id,
            'content' => $comment->content,
            'bookName' => $comment->book->name,
            'commentator' => $comment->commentator, 
            'emailCommentator' => $comment->emailCommentator,
        ];
    }
}
