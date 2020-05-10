<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function buyers(){
        return $this->hasMany(Buyer::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
}
