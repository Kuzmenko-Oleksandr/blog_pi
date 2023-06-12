<?php

namespace App\Http\Controllers\Admin\Category;



class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('admin.category.create');
    }
}
