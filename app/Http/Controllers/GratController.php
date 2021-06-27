<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grat;
//use App\Pref;
use App\Teachers;
class GratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
    {
        return view('grat.index')->with('grat',Grat::all());
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
		// $prefs = Pref::all();
       // if ($prefs->count() ==0   ) {
             
           // return redirect()->route('pref.create') ;
            
        //}
       return view('grat.create')->with('teachers',Teachers::all());//->with('prefs',Pref::all());
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
           
			
			"teachers_id"  => "required",
			//"prefs_id"  => "required",
            
			"featuredg" => "required|file"
			
            
        ]);

       
	   
	   
	   
	    $featuredg = $request->featuredg;
        $featuredg_new_name = time().$featuredg->getClientOriginalName();
       $featuredg->move('uploads/posts',$featuredg_new_name);
	   
	   
	   
	   
	   
	   
	   


         $grat = Grat::create([
            "name"    => $request->name,
            
			
			"teachers_id"  => $request->teachers_id,
			//"prefs_id"  => $request->prefs_id,
            
			 "featruedg" => 'uploads/posts/'.$featuredg_new_name,
			 
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
        $grat = Grat::find($id);
        return view('grat.edit')->with('grat',$grat )->with('teachers',Teachers::all());//->with('prefs',Pref::all());
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
      $grat = Grat::find($id);

        $this->validate($request,[
            "name"    => "required",
            
			
			"teachers_id"  => "required",
			//"prefs_id"  => "required" 
            
        ]);


      
		
		
		
		 if ( $request->hasFile('featuredg')  ) {
            $featuredg = $request->featuredg;
            $featuredg_new_name = time().$featuredg->getClientOriginalName();
            $featuredg->move('uploads/posts/',$featuredg_new_name);

            $grat->featruedg = 'uploads/posts/'.$featuredg_new_name;
    
        }
		
		
		
		
		 
		
		
		
		
		
        $grat->name =  $request->name;
        
		
		$grat->teachers_id = $request->teachers_id;
		//$edept->prefs_id = $request->prefs_id;
        $grat->save();

       
        
        return redirect()->route('grats');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grat =  Grat::find($id);
        
        $grat->delete($id);
        return redirect()->back();
    }
}
