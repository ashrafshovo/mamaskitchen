<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedDish extends Model
{
    //
    public function menu_category()
    {
        return $this->belongsTo('App\MenuCategory');
    }
}
