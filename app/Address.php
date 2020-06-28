<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //

    protected $fillable = [
        'user_id',
        'street',
        'number',
        /*'city_id',
        'zip_id',*/
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
 /*   public function cities(){
        return$this->belongsTo('App\City');
    }*/

    //hier ook zip linken
}
