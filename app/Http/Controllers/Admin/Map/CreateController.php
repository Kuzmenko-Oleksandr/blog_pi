<?php

namespace App\Http\Controllers\Admin\Map;


class CreateController extends BaseController
{
    public function __invoke()
    {
        $posts = $this->mapService->getAllPosts();
        return view('admin.map.create', ['posts' => $posts]);
    }
}
