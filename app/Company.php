<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

    public function quizes()
    {
        return $this->hasMany('App\Quiz');
    }
    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    public function consultations()
    {
        return $this->hasMany('App\Consultation');
    }
    public function messages()
    {
        return $this->hasMany('App\Message');
    }
    public function servises()
    {
        return $this->hasMany('App\Service');
    }
    public function images3d()
    {
        return $this->hasMany('App\Image3d');
    }
    // public function info()
    // {
    //     return $this->belongsTo('App\Alexandrainfo','id','company_id');
    // }

    public function info()
    {
        return $this->hasOne('App\Alexandrainfo');
    }

    protected $guarded = [];

}
