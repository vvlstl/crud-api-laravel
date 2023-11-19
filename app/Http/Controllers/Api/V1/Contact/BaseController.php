<?php

namespace App\Http\Controllers\Api\V1\Contact;

use App\Http\Controllers\Controller;
use App\Services\Contact\Service;

/**
 * @property Service $service
 */
class BaseController extends Controller
{
    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
