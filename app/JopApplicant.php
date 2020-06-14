<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class JopApplicant extends Model
{
    use SoftDeletes;
    public function jop()
    {
        return $this->belongsTo('App\Jop','jop_id');
    }

    protected $guarded = [];

}
