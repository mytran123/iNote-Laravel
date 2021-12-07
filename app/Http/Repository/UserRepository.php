<?php

namespace App\Http\Repository;

use App\Models\User;

class UserRepository
{
    public function getAll()
    {
        $users = User::all();
        return $users;
    }

    public function store($request)
    {
        $data = $request->only('name','email','password');
        User::query()->create($data);
    }

    public function getById($id)
    {
        $user = User::findOrFail($id);
            return $user;
    }
}
