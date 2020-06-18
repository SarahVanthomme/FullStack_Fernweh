<?php

namespace App;

use App\Http\Controllers\BannerPhotosController;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $fillable = [
        'title',
        'name',
        'body',
        'type',
        'photo_id',
        'continent_id'
    ];


    public function photo(){
        return $this->belongsTo(BannerPhoto::class);
    }

    public function continent(){
        return $this->belongsTo(Continent::class);
    }
}


