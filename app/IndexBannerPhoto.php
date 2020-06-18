<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexBannerPhoto extends Model
{
    //

    protected $fillable = [
        'file'
    ];

    public function getFileAttribute($photo){
        return $this->uploads . $photo;
    }
}
