<?php

namespace App\Http\Controllers\Admin\Map;

use App\Http\Requests\Admin\Map\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, $markerId)
    {
        $data = $request->validated();

        $marker = $this->mapService->getMarkerById($markerId);
        $this->mapService->updateMarker($marker, $data);

        return redirect()->route('admin.marker.show', $markerId);
    }
}
