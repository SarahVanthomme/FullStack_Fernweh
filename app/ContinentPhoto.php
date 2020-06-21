<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContinentPhoto extends Model
{
    //
    protected $fillable = [
        'file'
    ];

    public function getFileAttribute($photo){
        return $this->uploads . $photo;
    }
}
