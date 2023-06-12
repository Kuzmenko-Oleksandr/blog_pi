<?php

namespace App\Services\Admin;

use App\Models\Category;
use App\Models\GoogleMapMarker;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class AdminDashboardService
{
    public function getDashboardData()
    {
        $data = [];
        $data['usersCount'] = User::count();
        $data['postsCount'] = Post::count();
        $data['categoriesCount'] = Category::count();
        $data['tagsCount'] = Tag::count();
        $data['mapsCount'] = GoogleMapMarker::count();
        return $data;
    }
}
