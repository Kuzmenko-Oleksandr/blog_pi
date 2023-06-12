<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\User\BaseController;
use App\Models\User;
use App\Http\Requests\Admin\User\StoreRequest;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $roles = $this->userService->getRoles();
        return view('admin.user.create', compact('roles'));
    }
}
