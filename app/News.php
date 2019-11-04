<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'gallery_id', 'user_id', 'thumb', 'title', 'content', 'status', 'is_publish',
    ];
}
