<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    //
    public function featured_dish()
    {
        return $this->hasMany('App\FeaturedDish');
    }
}
