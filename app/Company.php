<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
    protected $guarded = [];

}
