<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Services\Admin\AdminDashboardService;

class IndexController extends Controller
{
    protected $adminDashboardService;

    public function __construct(AdminDashboardService $adminDashboardService)
    {
        $this->adminDashboardService = $adminDashboardService;
    }

    public function __invoke()
    {
        $data = $this->adminDashboardService->getDashboardData();
        return view('admin.main.index', compact('data'));
    }
}
