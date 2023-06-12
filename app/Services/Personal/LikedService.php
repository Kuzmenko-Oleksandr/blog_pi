<?php

namespace App\Services\Personal;

use App\Models\Post;

class LikedService
{
    public function getLikedPosts()
    {
        return auth()->user()->likedPosts;
    }

    public function removeLikedPost(Post $post)
    {
        auth()->user()->likedPosts()->detach($post->id);
    }
}
