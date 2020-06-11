<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JopApplicant extends Model
{

    public function jop()
    {
        return $this->belongsTo('App\Jop','jop_id');
    }

    protected $guarded = [];

}
