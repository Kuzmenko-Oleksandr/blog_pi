<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DeleteController extends BaseController
{
    public function __invoke(Post $post)
    {
        $this->likedService->removeLikedPost($post);
        return redirect()->route('personal.like.index');
    }
}
