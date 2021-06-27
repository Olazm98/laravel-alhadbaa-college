<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
      protected $fillable = [
	  'name' , 'des' , 'mate_des' , 'meta_keywords' , 'youtube' , 'cat_id' , 'published' , 'image'
	  ];
}
