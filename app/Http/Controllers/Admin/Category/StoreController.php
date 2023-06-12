<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Requests\Admin\Category\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $category = $this->categoryService->createCategory($data);
        return redirect()->route('admin.category.index')->with('category', $category);

    }
}
