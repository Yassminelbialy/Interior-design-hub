<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    //
    use SoftDeletes;
    public function images()
    {
        return $this->hasMany('App\ProjectImage','project_id');
    }

    public function category()
    {
        return $this->hasOne('App\Category','id','category_id');
    }

    public function company()
    {
        return $this->hasOne('App\Company','id','company_id');
    }
    protected $guarded = [];

}
