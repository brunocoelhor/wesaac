<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    protected $fillable = ['edition', 'year', 'city', 'state', 'description', 'image_city', 'proceedings'];
}
