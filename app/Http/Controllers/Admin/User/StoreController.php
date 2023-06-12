<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\User\BaseController;
use App\Models\User;
use App\Http\Requests\Admin\User\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        try {
            $this->userService->createUser($data);
        } catch (\Exception $exception) {
            abort(500);
        }

        return redirect()->route('admin.user.index');
    }
}
