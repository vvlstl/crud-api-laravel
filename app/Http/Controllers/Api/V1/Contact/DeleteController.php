<?php

namespace App\Http\Controllers\Api\V1\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class DeleteController extends Controller
{
    public function __invoke(Contact $contact)
    {
        $contact->delete();
        return response(null, ResponseAlias::HTTP_NO_CONTENT);
    }
}
