<?php

namespace App\Models;

use App\Models\BaseModel;

class Dog extends BaseModel
{
    public function user()
    {
        return $this->belongsTo('\App\User');
    }
}
