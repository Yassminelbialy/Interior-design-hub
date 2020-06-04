<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //


    public function images()
    {
        return $this->hasMany('App\QuizImage','quiz_id');
    }

    protected $guarded = [];

}
