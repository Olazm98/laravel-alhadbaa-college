<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grat extends Model
{
    protected $fillable = [
        'name',  'teachers_id', 'featruedg'
    ];
	
	
    public function getFeatruedAttribute($featrued)
    {
        
		 return asset($featruedg);
		
    }
	 
	
	 public function teachers()
    {
        return $this->belongsTo('App\Teachers');
    }
}
