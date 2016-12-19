<?php

namespace App;

use TCG\Voyager\Models\Post as VoyagerPost;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends VoyagerPost
{

    use Sluggable;


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function author()
    {
        return $this->belongsTo('App\User');
    }


    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
