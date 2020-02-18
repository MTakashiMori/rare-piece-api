<?php

namespace App\Services;

class StoreService extends ServiceAbstract
{
    public function __construct($property)
    {
        $this->property = $property;
    }
}
