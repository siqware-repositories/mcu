<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['user_id','title','type','status'];
    public function gallery_detail(){
        return $this->hasMany(GalleryDetail::class);
    }
}
