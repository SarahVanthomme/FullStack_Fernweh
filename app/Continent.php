<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //
    protected $fillable = [
        'name',
        'photo_id'
    ];

    public function photo(){
        return $this->belongsTo(ContinentPhoto::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
}
