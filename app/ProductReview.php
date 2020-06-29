<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    //

    protected $fillable = [
        'user_id', 'product_id', 'name', 'email', 'body'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
