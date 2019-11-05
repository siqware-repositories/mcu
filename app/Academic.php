<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    public function academic_detail(){
        return $this->hasMany(AcademicDetail::class);
    }
}
