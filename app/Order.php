<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    //
    use SoftDeletes;
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
