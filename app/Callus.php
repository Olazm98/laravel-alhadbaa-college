<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Callus extends Model
{
   protected $fillable = [
        'title', 'facebook', 'youtube', 'instagram', 'telegram', 'e_learning', 't_number'
    ];
}
