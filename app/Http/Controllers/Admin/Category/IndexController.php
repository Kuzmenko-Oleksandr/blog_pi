<?php

namespace App\Http\Controllers\Admin\Category;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $categories = $this->categoryService->getAllCategories();
        return view('admin.category.index', compact('categories'));
    }
}
