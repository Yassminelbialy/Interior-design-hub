<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizImage extends Model
{
    //



    public function quiz()
    {
        return $this->belongsTo('App\Quiz','quiz_id');
    }

    protected $guarded = [];

}
