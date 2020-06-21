<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name',
        'body',
        'photo_id'
    ];


    public function photo(){
        return $this->belongsTo(CategoryPhoto::class);
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
