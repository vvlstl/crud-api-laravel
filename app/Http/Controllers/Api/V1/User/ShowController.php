<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $user = User::findOrFail($id);
        return new UserResource($user);
    }
}
