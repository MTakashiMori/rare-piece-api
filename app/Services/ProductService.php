<?php

namespace App\Services;

use App\Repository\ProductRepository;

class ProductService extends ServiceAbstract
{
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }
}
