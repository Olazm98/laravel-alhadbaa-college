<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manges;
use App\Emang;

class EmangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index()
    {
        return view('emang.index')->with('emang',Emang::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		 $manges = Manges::all();
        if ($manges->count() ==0   ) {
             
            return redirect()->route('mange.create') ;
            
        }
       return view('emang.create')->with('manges',Manges::all());
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
            "name"    => "required",
            "content"  => "required",
			"manges_id"  => "required",
            "featured" => "required|image"
            
        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
       $featured->move('uploads/posts',$featured_new_name);


        $emang = Emang::create([
            "name"    => $request->name,
            "content"  => $request->content,
			"manges_id"  => $request->manges_id,
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
        $emang = Emang::find($id);
        return view('emang.edit')->with('emang',$emang )->with('manges',Manges::all());
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
      $emang = Emang::find($id);

        $this->validate($request,[
            "name"    => "required",
            "content"  => "required",
			"manges_id"  => "required" 
            
        ]);


        if ( $request->hasFile('featured')  ) {
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/posts/',$featured_new_name);

            $emang->featrued = 'uploads/posts/'.$featured_new_name;
    
        }
        $emang->name =  $request->name;
        $emang->content =  $request->content;
		$emang->manges_id = $request->manges_id;
        $emang->save();

       
        
        return redirect()->route('emangs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emang =  Emang::find($id);
        
        $emang->delete($id);
        return redirect()->back();
    }
}
