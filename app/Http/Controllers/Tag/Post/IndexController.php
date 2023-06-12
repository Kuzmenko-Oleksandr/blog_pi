<?php


namespace App\Http\Controllers\Tag\Post;

use App\Http\Controllers\Tag\BaseController;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(Request $request)
    {
        $data = $this->tagService->getPostsByTags($request);

        return view('tag.post.index', $data);
    }
}

