<?php

namespace App\Http\Controllers\Personal\Comment;

class IndexController extends BaseController
{
    public function __invoke()
    {
        return $this->commentService->showIndexView();
    }
}
