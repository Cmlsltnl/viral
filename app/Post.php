<?php

namespace App;

use TCG\Voyager\Models\Post as VoyagerPost;

class Post extends VoyagerPost
{

    public function author()
    {
        return $this->belongsTo('App\User');
    }


    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
