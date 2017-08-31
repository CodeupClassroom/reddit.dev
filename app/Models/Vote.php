<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    
    // relationship method to User
    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }

    // relationship method to Post
    public function post()
    {
        return $this->belongsTo('\App\Models\Post', 'post_id');
    }
}
