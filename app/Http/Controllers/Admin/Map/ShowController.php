<?php

namespace App\Http\Controllers\Admin\Map;

class ShowController extends BaseController
{
    public function __invoke($markerId)
    {
        $marker = $this->mapService->getMarkerById($markerId);
        $posts = $this->mapService->getAllPosts();
        return view('admin.map.show', compact('marker', 'posts'));
    }
}
