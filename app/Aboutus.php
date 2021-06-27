<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
	protected $fillable = [
        'title', 'content', 'featrued'
    ];
	
	
    public function getFeatruedAttribute($featrued)
    {
        return asset($featrued);
    }
}
