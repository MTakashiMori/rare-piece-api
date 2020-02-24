<?php

namespace App\Http\Controllers;

use App\Services\StoreService;
use Illuminate\Http\Request;

class StoreController extends AbstractController
{
    public function __construct(StoreService $service)
    {
        $this->service = $service;
    }
}
