<?php

namespace App\Models;

class Department extends ModelAbstract
{
    protected $appends = [];

    public function group() 
    {
        return $this->hasMany(Group::class);
    }
}
