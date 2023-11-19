<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $users = User::with('contacts')->get();
        return UserResource::collection($users);
    }
}
