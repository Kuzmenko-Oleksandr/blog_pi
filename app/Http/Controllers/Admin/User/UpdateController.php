<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use App\Http\Requests\Admin\User\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();

        $user = $this->userService->updateUser($data, $user);

        return view('admin.user.show', compact('user'));
    }
}
