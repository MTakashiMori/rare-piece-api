<?php

namespace App\Repository;

use App\Models\Group;

class GroupRepository extends RepositoryAbstract
{
    public function __construct(Group $model)
    {
        $this->model = $model;
        $this->relationship = [];
    }
}
