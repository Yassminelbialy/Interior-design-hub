<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Company extends Model
{
use Notifiable;
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
    public function services()
    {
        return $this->hasMany('App\Service');
    }
    public function images3d()
    {
        return $this->hasMany('App\Image3d');
    }
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
    public function sliderImages()
    {
        return $this->hasMany('App\Sliderimages');
    }

    public function info()
    {
        return $this->hasOne('App\Alexandrainfo');
    }
    public function contact()
    {
        return $this->hasOne('App\Contact');
    }

    protected $guarded = [];

}
