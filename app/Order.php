<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = [
        'user_id', 'amount', 'token'
    ];

    protected $hidden = [
        'token'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
