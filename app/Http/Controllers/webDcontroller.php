<?php

namespace App\Http\Controllers;
use\App\Edept;
use\App\Setting;
use\App\Teachers;
use\App\Calcul;
use\App\Category;
use\App\Post;
use\App\Pref;
use\App\Emang;
use\App\Form1;
use\App\Tag;
use\App\Aboutus;
use\App\Callus;
use Illuminate\Http\Request;

class webDcontroller extends Controller
{
    public function dep()
    {
        return view('dep')->with('contentd',Edept::first()->contentd)
		                     ->with('name',Edept::all())
							 ->with('featrued',Edept::all())
		                     ->with('name',Emang::first()->name)
							 ->with('edept',Edept::all())
							 ->with('name',Pref::all())
							 ->with('st',Calcul::first()->st)
							 ->with('gr',Calcul::first()->gr)
							 ->with('em',Calcul::first()->em)
							 ->with('pr',Calcul::first()->pr)
							 ->with('featrued',Pref::all())
							 ->with('content',Pref::all())
							 ->with('teachers_id',Pref::all())
							 ->with('pref',Pref::all())
							 ->with('tag',Tag::all())
		                     ->with('teachers',Teachers::all())
							 ->with('first_post',Post::orderBy('created_at','desc')->first())
							 ->with('second_post',Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
							 ->with('third_post',Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
							 ->with('news',Category::find(1))
							 ->with('newss',Category::find(2))
							 ->with('newsss',Category::find(3))
							 ->with('newssss',Category::find(4));
						
	}	
	public function more()
    {
        return view('more')  ->with('aboutus',Aboutus::all())
		                     ->with('content',Aboutus::all())
		                     ->with('featrued',Aboutus::all())
		                     ->with('title',Aboutus::all());
						
	}	
	public function mang()
    {
        return view('mang')  ->with('emang',Emang::all())
		                     ->with('name',Emang::all())
		                     ->with('content',Emang::all())
		                     ->with('featrued',Emang::all());
						
	}	
	public function form1()
    {
        return view('form1') 
		 ->with('teachers',Teachers::all())
		->with('form1',Form1::all())
		->with('form1',Form1::all())
	->with('name',Form1::all())
	->with('stage',Form1::all())
	->with('teachers_id',Form1::all())
	->with('featrued',Form1::all())
	->with('typestu',Form1::all())
	->with('addres',Form1::all())
	->with('bd',Form1::all());
						
	}	
	
	public function call()
    {
        return view('call') 
		 ->with('callus',Callus::all())
		->with('title',Callus::all())
		->with('facebook',Callus::all())
	->with('youtube',Callus::all())
	->with('instagram',Callus::all())
	->with('telegram',Callus::all())
	->with('e_learning',Callus::all())
	->with('t_number',Callus::all());
						
	}	
	
	
}
