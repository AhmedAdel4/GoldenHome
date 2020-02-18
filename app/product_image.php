<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_image extends Model
{
    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
