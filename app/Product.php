<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFavorite\Traits\Favoriteable;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
    use Favoriteable ,Sortable;

    public $sortable = [
        'price',
        'update_at'
    ];

    public function category()
    {
        return $this->belongTo('App\Category');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
