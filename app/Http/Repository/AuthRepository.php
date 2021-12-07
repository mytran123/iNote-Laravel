<?php

namespace App\Http\Repository;



use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthRepository
{
    public function Register($request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    }
}
