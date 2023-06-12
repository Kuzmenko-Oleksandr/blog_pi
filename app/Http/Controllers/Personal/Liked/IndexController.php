<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;

class IndexController extends BaseController
{
    public function __invoke()
    {
        if (!empty(auth()->user()->likedPosts)) {
            $posts = auth()->user()->likedPosts;
        }
        return view('personal.liked.index', compact('posts'));
    }
}
