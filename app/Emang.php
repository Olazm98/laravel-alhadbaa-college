<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emang extends Model
{
     protected $fillable = [
        'name', 'content', 'manges_id', 'featrued'
    ];
	
	
    public function getFeatruedAttribute($featrued)
    {
        return asset($featrued);
    }
	
	
	
	 public function manges()
    {
        return $this->belongsTo('App\Manges');
    }
	
}


