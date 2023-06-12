<?php

namespace App\Services;

use App\Models\Comment;
use App\Models\Post;
use Carbon\Carbon;

class PostService
{
    public function getLatestPosts($perPage = 6)
    {
        return Post::orderBy('created_at', 'DESC')->paginate($perPage);
    }

    public function getRandomPosts($limit = 4)
    {
        return Post::inRandomOrder()->limit($limit)->get();
    }

    public function getLikedPosts($limit = 4)
    {
        return Post::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->limit($limit)->get();
    }

    public function getPostDetails(Post $post)
    {
        $date = Carbon::parse($post->created_at);
        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->take(3)
            ->get();

        return [
            'post' => $post,
            'date' => $date,
            'relatedPosts' => $relatedPosts,
        ];
    }

    public function storeComment(Post $post, array $data)
    {
        $data['user_id'] = auth()->user()->id;
        $data['post_id'] = $post->id;
        Comment::create($data);
    }

    public function togglePostLike(Post $post)
    {
        auth()->user()->likedPosts()->toggle($post->id);
    }
}
