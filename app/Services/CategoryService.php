<?php
namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function getAllCategories()
    {
        return Category::all();
    }

    public function getCategoryPosts(Category $category, $perPage = 6)
    {
        return $category->posts()->paginate($perPage);
    }
}
