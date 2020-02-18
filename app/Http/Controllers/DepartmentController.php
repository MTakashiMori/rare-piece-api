<?php

namespace App\Http\Controllers;

use App\Services\DepartmentService;
use Illuminate\Http\Request;

class DepartmentController extends AbstractController
{
    public function __construct(DepartmentService $service)
    {
        $this->service = $service;
    }
}
