<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commitment extends Model
{
    protected $fillable = ['type','title','content'];
}
