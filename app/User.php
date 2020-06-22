<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    use SoftDeletes;
    protected $fillable = [
        'name',  'email', 'address_id', 'zip_id', 'city_id', 'role_id', 'is_active','password',
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


    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function address(){
        return $this->belongsTo('App\Address');
    }

    public function zip(){
        return $this->belongsTo('App\Zip');
    }

    public function city(){
        return $this->belongsTo('App\City');
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function isAdmin()
    {
        if ($this->role->name == "admin" && $this->is_active == 1) {
            return true;
        }
        return false;
    }
}
