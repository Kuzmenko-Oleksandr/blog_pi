<?php
namespace App\Services\Personal;
class MainService
{
    public function getUserData()
    {
        $user = auth()->user();
        $data = [];
        $data['commentsCount'] = $user->comments()->count();
        $data['likesCount'] = $user->likedPosts()->count();
        return $data;
    }
}
