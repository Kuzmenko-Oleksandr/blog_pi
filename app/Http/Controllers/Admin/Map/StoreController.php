<?php

namespace App\Http\Controllers\Admin\Map;

use App\Http\Requests\Admin\Map\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $marker = $this->mapService->createMarker($data);

        return redirect()->route('admin.marker.index')->with('marker', $marker);
    }
}
