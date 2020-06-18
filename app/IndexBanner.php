<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexBanner extends Model
{
    //

    protected $fillable = [
        'name',
        'body',
      //  'type',
        'photo_id'
    ];

    public function photo(){
        return $this->belongsTo(IndexBannerPhoto::class);
    }

}
