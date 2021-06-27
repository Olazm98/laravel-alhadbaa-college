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
use\App\Tag;
use\App\Aboutus;
use\App\callus;
use Illuminate\Http\Request;

class webUcontroller extends Controller
{
    public function indexxx()
    {
        return view('indexxx')->with('contentd',Edept::first()->contentd)
		                     ->with('name',Edept::all())
							 ->with('featrued',Edept::all())
		                     ->with('name',Emang::first()->name)
							 ->with('edept',Edept::all())
							 ->with('name',Pref::all())
							  ->with('st',Calcul::all())
							
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
							 ->with('newssss',Category::find(4))
							 ->with('calcul',Calcul::all())
		                     ->with('st',Calcul::all())
		                     ->with('gr',Calcul::all())
							  ->with('pr',Calcul::all())
		                     ->with('em',Calcul::all());
						
	}	
	
	 public function showPost($slug)
    {

        $post      = Post::where('slug' , $slug)->first();
        $next_page = Post::where('id' , '>' ,$post->id)->min('id');
        $prev_page = Post::where('id' , '<' ,$post->id)->max('id');


        return view('posts.show') 
                             
                             ->with('tags' , Tag::all() ) 
                             ->with('post' , $post)
                             ->with('next' , Post::find($next_page))
                             ->with('prev' , Post::find($prev_page))
                            ->with('title' , $post->title)
                            ->with('blog_name' , Setting::first()->blog_name)
                            ->with('settings',  Setting::first() )
                            ->with('categories' , Category::take(5)->get() )   ;

    }

	
	
	
	
	 

}
