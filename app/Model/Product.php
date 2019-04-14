<?php

namespace App\Model;

use App\Model\Reviews;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //product has many reviews
    public function reviews(){
    return $this->hasMany(Reviews::class);
    }
}
