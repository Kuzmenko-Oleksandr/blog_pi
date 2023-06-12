<?php

namespace App\Http\Controllers\Admin\Map;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $markers = $this->mapService->getAllMarkers();
        $posts = $this->mapService->getAllPosts();
        return view('admin.map.index', compact('markers', 'posts'));
    }
}
