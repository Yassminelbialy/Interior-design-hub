<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alexandrainfo extends Model
{
    //
    public function company()
    {
        return $this->hasOne('App\Company','id','company_id');
    }
    protected $guarded = [];

}
