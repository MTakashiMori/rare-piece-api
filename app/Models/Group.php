<?php

namespace App\Models;

class Group extends ModelAbstract
{
    protected $appends = [];

    public function department() {
        return $this->belongsTo(Department::class);
    }
}
