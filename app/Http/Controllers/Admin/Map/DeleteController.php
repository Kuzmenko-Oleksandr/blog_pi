<?php

namespace App\Http\Controllers\Admin\Map;

class DeleteController extends BaseController
{
    public function __invoke($markerId)
    {
        $marker = $this->mapService->getMarkerById($markerId);
        $this->mapService->deleteMarker($marker);
        return redirect()->route('admin.marker.index');
    }
}
