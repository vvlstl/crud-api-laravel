<?php

namespace App\Services\User;

use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Service
{
    public function store($data)
    {
        $user = User::where('email', $data['email'])->first();
        if ($user) return response(['error' => 'User with is email already exist'], 403);
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        return response(new UserResource($user));
    }
}
