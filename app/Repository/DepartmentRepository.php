<?php

namespace App\Repository;

use App\Models\Department;

class DepartmentRepository extends RepositoryAbstract
{
    public function __construct(Department $model)
    {
        $this->model = $model;
        $this->relationship = [];
    }
}
