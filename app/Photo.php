<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'file_name',
        'character_id'
    ];

    public function getUrlAttribute()
    {
        $photoHelper = app(PhotoHelper::class);
        return $photoHelper->generateUrl($this);
    }

}
