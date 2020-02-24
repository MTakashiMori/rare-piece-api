<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends AbstractController
{
    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }
}
