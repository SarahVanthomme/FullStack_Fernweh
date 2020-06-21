<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPhoto extends Model
{
    //
    protected $fillable = [
        'file'
    ];

    public function getFileAttribute($photo){
        return $this->uploads . $photo;
    }
}
