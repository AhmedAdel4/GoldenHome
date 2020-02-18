<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $guarded = [];
    public static $products = array();
    public function products()
    {
        return $this->hasMany(product::class);
    }
}
