<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form1 extends Model
{
    protected $fillable = [
        'name', 'stage', 'teachers_id', 'featrued', 'typestu', 'addres', 'bd'
    ];
	
	
    public function getFeatruedAttribute($featrued)
    {
        return asset($featrued);

    }
	 
	
	 public function teachers()
    {
        return $this->belongsTo('App\Teachers');
    }
}
