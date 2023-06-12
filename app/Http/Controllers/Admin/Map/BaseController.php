<?php
namespace App\Http\Controllers\Admin\Map;

use App\Http\Controllers\Controller;
use App\Services\Admin\MapService;

class BaseController extends Controller
{
    protected  $mapService;

    public function __construct(MapService $mapService)
    {
        $this->mapService = $mapService;
    }
}
