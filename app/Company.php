<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
    protected $guarded = [];

}
