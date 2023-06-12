<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Models\Comment;

class DeleteController extends BaseController
{

    public function __invoke(Comment $comment)
    {
        $this->commentService->deleteComment($comment);
        return redirect()->route('personal.comment.index');
    }
}
