<?php

namespace App\Http\Controllers\Api\V1\Contact;

use App\Http\Controllers\Controller;
use App\Http\Resources\Contact\ContactResource;
use App\Models\Contact;

class ShowController extends Controller
{
    public function __invoke($id)
    {
        $contact = Contact::findOrFail($id);
        return new ContactResource($contact);
    }
}
