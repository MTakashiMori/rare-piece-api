<?php

namespace App\Services;

use App\Repository\CategoryRepository;

class CategoryService extends ServiceAbstract
{
    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }
}
