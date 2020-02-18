<?php

namespace App\Services;

use App\Repository\RoleRepository;

class RoleService extends ServiceAbstract
{
    public function __construct(RoleRepository $repository)
    {
        $this->repository = $repository;
    }
}
