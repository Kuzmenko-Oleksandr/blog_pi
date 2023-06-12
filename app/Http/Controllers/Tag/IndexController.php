<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $tags = $this->tagService->getAllTags();
        return view('tag.index', compact('tags'));
    }

}
