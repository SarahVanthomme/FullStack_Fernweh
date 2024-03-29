<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'category_id',
        'continent_id',
        'country_id',
        'city_id',
        'photo_id',
        'image',
        'name',
        'description',
        'bestseller',
        'price',
        'review_id'
    ];

    public function photo(){
        return $this->belongsTo(Photo::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function continent(){
        return $this->belongsTo(Continent::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function reviews(){
        return $this->hasMany(ProductReview::class);
    }
}
