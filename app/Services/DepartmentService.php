<?php

namespace App\Services;

use App\Repository\DepartmentRepository;

class DepartmentService extends ServiceAbstract
{
    public function __construct(DepartmentRepository $repository)
    {
        $this->repository = $repository;
    }
}
