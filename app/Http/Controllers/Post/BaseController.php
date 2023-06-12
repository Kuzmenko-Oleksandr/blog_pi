<?php
namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Services\PostService;

class BaseController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }
}
