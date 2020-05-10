<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function card(){
        return $this->belongsTo(Card::class);
    }
}
