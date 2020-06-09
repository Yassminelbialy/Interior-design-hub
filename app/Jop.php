<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jop extends Model
{


    public function applicants()
    {
        return $this->hasMany('App\JopApplicant','Jop_id');
    }
    protected $guarded = [];

}
