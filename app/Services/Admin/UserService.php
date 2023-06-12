<?php

namespace App\Services\Admin;

use App\Jobs\StoreUserJob;
use App\Models\User;

class UserService
{
    public function createUser($data)
    {
        try {
            StoreUserJob::dispatch($data);
        } catch (\Exception $exception) {
            abort(500);
        }
    }

    public function updateUser($data, User $user)
    {
        $user->update($data);
        return $user;
    }

    public function deleteUser(User $user)
    {
        $user->delete();
    }

    public function getRoles()
    {
        return User::getRoles();
    }
    public function getAllUsers()
    {
        return User::all();
    }
}
