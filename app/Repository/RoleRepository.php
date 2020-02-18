<?php

namespace App\Repository;

use App\Models\Role;

class RoleRepository extends RepositoryAbstract
{
    public function __construct(Role $model)
    {
        $this->model = $model;
        $this->relationship = [];
    }
}
