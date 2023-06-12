<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Services\Personal\MainService;

class IndexController extends Controller
{
    protected $mainService;

    public function __construct(MainService $mainService)
    {
        $this->mainService = $mainService;
    }

    public function __invoke()
    {
        $data = $this->mainService->getUserData();
        return view('personal.main.index', compact('data'));
    }
}
