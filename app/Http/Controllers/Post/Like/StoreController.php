<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Post\BaseController;
use App\Models\Post;


class StoreController extends BaseController
{
    public function __invoke(Post $post)
    {
        $this->postService->togglePostLike($post);
        return redirect()->back();
    }
}
