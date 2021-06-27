<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('abouts.index')->with('abouts',About::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        return view('abouts.create');
        
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            "title"    => "required",
            "content"  => "required",
            //"category_id"  => "required",
            "featured" => "required|image"
            //"tags" => "required"
        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/abouts',$featured_new_name);


        $about = About::create([
            "title"    => $request->title,
            "content"  => $request->content,
           // "category_id"  => $request->category_id,
            "featrued" => 'uploads/posts/'.$featured_new_name,
            //"slug"    => str_slug($request->title) // my new post => my-new-post
            //"user_id" => Auth::id()
        ]);
     return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $about = About::find($id);
        return view('abouts.edit')->with('abouts',$about);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $about = About::find($id);

        $this->validate($request,[
            "title"    => "required",
            "content"  => "required"
           // "category_id"  => "required" 
            
        ]);


        if ( $request->hasFile('featured')  ) {
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/abouts/',$featured_new_name);

            $about->featrued = 'uploads/abouts/'.$featured_new_name;
    
        }

       
        $about->title =  $request->title;
        $about->content =  $request->content;
        //$about->category_id = $request->category_id;
        $about->save();

        //$about->tags()->sync($request->tags);
        
        return redirect()->route('abouts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $about = About::find($id);
        $about->delete($id);
        return redirect()->back();
    }
}
