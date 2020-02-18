<?php

namespace App\Services;

use App\Repository\GroupRepository;

class GroupService extends ServiceAbstract
{
    public function __construct(GroupRepository $repository)
    {
        $this->repository = $repository;
    }
}
