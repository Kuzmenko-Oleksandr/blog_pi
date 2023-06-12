<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Requests\Personal\Comment\UpdateRequest;
use App\Models\Comment;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Comment $comment)
    {
        $this->commentService->updateComment($request, $comment);
        return redirect()->route('personal.comment.index');
    }
}
