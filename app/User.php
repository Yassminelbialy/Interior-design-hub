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
<<<<<<< HEAD
    public function company()
    {
        return $this->hasOne('App\Company','id','company_id');
    }

    public function mycompany()
    {
        return $this->hasOne('App\Company');
    }

=======
    // public function company()
    // {
    //     return $this->hasOne('App\Company','id','company_id');
    // }
>>>>>>> 78c84ee2ce4b31fc2f749febbfa54dc5862e58f4


}
