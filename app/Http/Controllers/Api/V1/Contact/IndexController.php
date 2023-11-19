<?php

namespace App\Http\Controllers\Api\V1\Contact;

use App\Http\Controllers\Controller;
use App\Http\Resources\Contact\ContactResource;
use App\Models\Contact;

class IndexController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all();
        return ContactResource::collection($contacts);
    }
}
