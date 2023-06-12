<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\User\BaseController;
use App\Models\User;

class DeleteController extends BaseController
{
    public function __invoke(User $user)
    {
        $this->userService->deleteUser($user);
        return redirect()->route('admin.user.index');
    }
}
