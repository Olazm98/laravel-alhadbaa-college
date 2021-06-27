<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pref;
use App\Teachers;
class PrefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        return view('pref.index')->with('pref',Pref::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		 $teachers = Teachers::all();
        if ($teachers->count() ==0   ) {
             
            return redirect()->route('teacher.create') ;
            
        }
       return view('pref.create')->with('teachers',Teachers::all());
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
			"teachers_id"  => "required",
            "featured" => "required|image"
            
        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
       $featured->move('uploads/posts',$featured_new_name);


         $pref = Pref::create([
            "name"    => $request->name,
            "content"  => $request->content,
			"teachers_id"  => $request->teachers_id,
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
        $pref = Pref::find($id);
        return view('pref.edit')->with('pref',$pref )->with('teachers',Teachers::all());
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
      $pref = Pref::find($id);

        $this->validate($request,[
            "name"    => "required",
            "content"  => "required",
			"teachers_id"  => "required" 
            
        ]);


        if ( $request->hasFile('featured')  ) {
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/posts/',$featured_new_name);

            $pref->featrued = 'uploads/posts/'.$featured_new_name;
    
        }
        $pref->name =  $request->name;
        $pref->content =  $request->content;
		$pref->teachers_id = $request->teachers_id;
        $pref->save();

       
        
        return redirect()->route('prefs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pref =  Pref::find($id);
        
        $pref->delete($id);
        return redirect()->back();
    }
}
