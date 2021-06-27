<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edept extends Model
{
   protected $fillable = [
        'name', 'content', 'teachers_id', 'featrued', 'contentd', 'featruedg','featruedm', 'prefs_id'
    ];
	
	
    public function getFeatruedAttribute($featrued)
    {
        return asset($featrued);
		 return asset($featruedg);
		 return asset($featruedm);
		  return asset($images);
    }
	 
	
	 public function teachers()
    {
        return $this->belongsTo('App\Teachers');
    }
	
	//public function prefs()
	//{
   //    return $this->belongsTo('App\Pref');
  //  }
	


}
