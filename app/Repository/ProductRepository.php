<?php

namespace App\Repository;

use App\Models\Product;

class ProductRepository extends RepositoryAbstract
{
    public function __construct(Product $model)
    {
        $this->model = $model;
        $this->relationship = [];
    }
}
