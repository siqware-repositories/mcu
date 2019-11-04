<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['user_id', 'title', 'open', 'close', 'location', 'desc', 'status','is_publish'];
}
