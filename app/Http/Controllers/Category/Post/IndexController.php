<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Category\BaseController;
use App\Models\Category;

class IndexController extends BaseController
{
    public function __invoke(Category $category)
    {
        $posts = $this->categoryService->getCategoryPosts($category);

        return view('category.post.index', compact('posts'));
    }
}
