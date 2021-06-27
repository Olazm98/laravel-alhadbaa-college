<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pref extends Model
{
   protected $fillable = [
        'name', 'content', 'teachers_id', 'featrued'
    ];
	
	
    public function getFeatruedAttribute($featrued)
    {
        return asset($featrued);
    }
	
	
	
	 public function teachers()
    {
        return $this->belongsTo('App\Teachers');
    }
	// public function edept()
    //{
    //    return $this->belongsTo('App\Edept');
   // }
	
}
