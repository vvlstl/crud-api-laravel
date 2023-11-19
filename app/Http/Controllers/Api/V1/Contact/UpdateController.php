<?php

namespace App\Http\Controllers\Api\V1\Contact;

use App\Http\Requests\Contact\UpdateRequest;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, $id)
    {
        $data = $request->validated();
        return $this->service->update($id, $data);
    }
}
