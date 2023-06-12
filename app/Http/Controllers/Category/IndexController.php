<?php

namespace App\Http\Controllers\Category;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $categories = $this->categoryService->getAllCategories();

        return view('category.index', compact('categories'));
    }
}
