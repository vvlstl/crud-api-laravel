<?php

namespace App\Services\Contact;

use App\Http\Resources\Contact\ContactResource;
use App\Models\Contact;

class Service
{
    public function store($data)
    {
        $contact = Contact::create($data);
        return response(new ContactResource($contact));
    }

    public function update($id, $data)
    {
        $contact = Contact::find($id);
        $contact->update($data);
        return response(new ContactResource($contact));
    }
}
