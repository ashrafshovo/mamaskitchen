<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedDish extends Model
{
    //
    public function menu_category()
    {
        return $this->belongsTo('App\Models\MenuCategory');
    }
}
