<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoAlbum extends Model
{
    public function photos()
    {
        return $this->hasMany('App\Photo', 'album_id');
    }
}
