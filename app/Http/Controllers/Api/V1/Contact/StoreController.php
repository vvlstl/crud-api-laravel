<?php

namespace App\Http\Controllers\Api\V1\Contact;

use App\Http\Requests\Contact\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        return $this->service->store($data);
    }
}
