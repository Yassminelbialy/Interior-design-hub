<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
    protected $guarded = [];
}
