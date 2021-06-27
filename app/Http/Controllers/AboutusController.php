<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutus;
class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aboutus.index')->with('aboutus',Aboutus::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('aboutus.create');
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
            "featured" => "required|image"
            
        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
       $featured->move('uploads/posts',$featured_new_name);


         $aboutus = Aboutus::create([
            "title"    => $request->title,
            "content"  => $request->content,
             "featrued" => 'uploads/posts/'.$featured_new_name,
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
        $aboutus = Aboutus::find($id);
        return view('aboutus.edit')->with('aboutus',$aboutus );
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
      $aboutus = Aboutus::find($id);

        $this->validate($request,[
            "title"    => "required",
            "content"  => "required"
            
        ]);


        if ( $request->hasFile('featured')  ) {
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
             $featured->move('uploads/posts/',$featured_new_name);

            $aboutus->featrued = 'uploads/posts/'.$featured_new_name;
    
        }
        $aboutus->title =  $request->title;
        $aboutus->content =  $request->content;
        $aboutus->save();

       
        
        return redirect()->route('aboutus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutus =  Aboutus::find($id);
        
        $aboutus->delete($id);
        return redirect()->back();
    }
}
