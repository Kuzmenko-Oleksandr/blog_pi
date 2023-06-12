<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        $data = $this->postService->getPostDetails($post);
        return view('post.show', $data);
    }
}
