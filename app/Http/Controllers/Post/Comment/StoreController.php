<?php

namespace App\Http\Controllers\Post\Comment;

use App\Http\Controllers\Post\BaseController;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Post;


class StoreController extends BaseController
{
    public function __invoke(Post $post, StoreRequest $request)
    {
        $data = $request->validated();
        $this->postService->storeComment($post, $data);

        return redirect()->route('post.show', $post->id);
    }
}
