<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Requests\User\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        return $this->service->store($data);
    }
}
