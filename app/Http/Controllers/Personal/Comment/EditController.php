<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Models\Comment;

class EditController extends BaseController
{
    public function __invoke(Comment $comment)
    {
        return $this->commentService->showEditView($comment);
    }
}
