<?php

namespace App\Repository;

use App\Models\Store;

class StoreRepository extends RepositoryAbstract
{
    public function __construct(Store $model)
    {
        $this->model = $model;
        $this->relationship = [];
    }
}
