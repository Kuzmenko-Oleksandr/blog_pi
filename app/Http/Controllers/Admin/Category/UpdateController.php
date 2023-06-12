<?php

namespace App\Http\Controllers\Admin\Category;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category = $this->categoryService->updateCategory($category, $data);
        return view('admin.category.show', compact('category'));
    }
}
