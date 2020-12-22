<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Scores extends Model
{
    protected $fillable=['user_id','score','scorer_id'];
    use SoftDeletes;
}
