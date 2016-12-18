<?php

namespace App;

use TCG\Voyager\Models\User as VoyagerUser;

class User extends VoyagerUser
{

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
