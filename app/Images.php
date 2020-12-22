<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Images extends Model
{
    protected $fillable=['user_id','photo'];
    use SoftDeletes;
}
