<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\GoogleMapMarker;

class IndexController extends Controller
{
    public function __invoke()
    {
        $markers = GoogleMapMarker::all();

        return view('main.index', compact('markers'));
    }
}
