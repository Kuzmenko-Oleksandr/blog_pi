<?php

namespace App\Services\Personal;

use App\Http\Requests\Personal\Comment\UpdateRequest;
use App\Models\Comment;

class CommentService
{
    public function deleteComment(Comment $comment)
    {
        $comment->delete();
    }

    public function showEditView(Comment $comment)
    {
        return view('personal.comment.edit', compact('comment'));
    }

    public function showIndexView()
    {
        $comments = auth()->user()->comments()->with('post')->get();
        return view('personal.comment.index', compact('comments'));
    }

    public function updateComment(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();
        $comment->update($data);
    }
}
