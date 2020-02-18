<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function images()
    {
        return $this->hasMany(product_image::class);
    }
}
