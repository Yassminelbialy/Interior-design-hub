<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function instagram(){
        return $this->hasOne(Instagram::class, 'user_id', 'id');
    }
    public function company()
    {
        return $this->hasOne('App\Company','id','company_id');
    }
<<<<<<< HEAD
=======

>>>>>>> 06dd7b1cceb5930b0cf81dbbd19d9951fa12a228


}
