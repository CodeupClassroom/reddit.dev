<?php

namespace App\Models;

use App\Models\BaseModel;

class Post extends BaseModel
{
    public static $rules = [
        'title' => 'required|max:200',
        'content' => 'required',
        'url'   => 'url'
    ];

    // method name on the Many model is a singular of the One model
    public function user()
    {
        return $this->belongsTo('\App\User', 'created_by');
    }

    public function votes()
    {
        return $this->hasMany('App\Models\Vote', 'vote_id');
    }

    public static function search($search)
    {
        $posts = Post::with('user')
                        ->where('title', 'LIKE', "%$search%")
                        ->orWhere('content', 'LIKE', "%$search%")
                        ->orWhere('url', 'LIKE', "%$search%")

                        // ->orWhereHas('user', function($query) use ($search) {
                        //     $query->where('name', 'like', "%$search%");
                                
                        // })
                        ->orderBy('updated_at', 'DESC');
        
        $data['posts'] = $posts;
        return $data;
    }
}
