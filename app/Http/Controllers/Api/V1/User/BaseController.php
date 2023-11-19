<?php

namespace App\Http\Controllers\Api\V1\User;

use App\Http\Controllers\Controller;
use App\Services\User\Service;

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
