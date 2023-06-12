<?php

namespace App\Http\Controllers\Post;


class IndexController extends BaseController
{
    public function __invoke()
    {
        $posts = $this->postService->getLatestPosts();
        $randomPosts = $this->postService->getRandomPosts();
        $likedPosts = $this->postService->getLikedPosts();

        return view('post.index', compact('posts', 'randomPosts', 'likedPosts'));
    }
}
