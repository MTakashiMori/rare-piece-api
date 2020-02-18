<?php

namespace App\Repository;

use App\Models\Category;

class CategoryRepository extends RepositoryAbstract
{
    public function __construct(Category $model)
    {
        $this->model = $model;
        $this->relationship = [];
    }
}
