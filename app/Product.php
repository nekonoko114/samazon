<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFavorite\Traits\Favoriteable;

class Product extends Model
{
    use Favoriteable;
    public function category()
    {
        return $this->belongTo('App\Category');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
