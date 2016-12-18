<?php

namespace App;

use TCG\Voyager\Models\Category as VoyagerCategory;

class Category extends VoyagerCategory
{

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
