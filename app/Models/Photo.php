<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function user()
    {
        return $this->belongTo('App\Models\User');
    }
}