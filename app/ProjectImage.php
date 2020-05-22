<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectImage extends Model
{
    use SoftDeletes;
    public function project()
    {
        return $this->belongsTo('App\Project','project_id');
    }
    //

    protected $guarded = [];

}
