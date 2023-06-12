<?php
namespace App\Http\Controllers\Category;
use App\Http\Controllers\Controller;
use App\Services\CategoryService;

class BaseController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
}
