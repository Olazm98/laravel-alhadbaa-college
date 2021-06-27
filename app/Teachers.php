<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
      public function prefs()
    {
        return $this->hasMany('App\Pref');
    }
	 public function edepts()
    {
        return $this->hasMany('App\Edept');
    }
	 public function grats()
    {
        return $this->hasMany('App\Grat');
    }
	public function form1s()
    {
        return $this->hasMany('App\Form1');
    }
}
