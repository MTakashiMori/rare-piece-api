<?php

namespace App\Http\Controllers;

use App\Services\GroupService;

class GroupController extends AbstractController
{
    public function __construct(GroupService $service)
    {
        $this->service = $service;
    }
}
