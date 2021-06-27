<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manges extends Model
{
      public function emangs()
    {
        return $this->hasMany('App\Emang');
    }
}
