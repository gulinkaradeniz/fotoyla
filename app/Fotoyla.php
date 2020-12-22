<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotoyla extends Model
{
    public function images()
    {
        return $this->hasMany(Images::class,'user_id','id');
    }
}
