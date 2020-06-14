<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Jop extends Model
{

use SoftDeletes;
    public function applicants()
    {
        return $this->hasMany('App\JopApplicant','Jop_id');
    }
    protected $guarded = [];

}
