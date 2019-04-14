<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    //belongs to
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
