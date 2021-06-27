<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Edept;
//use App\Pref;
use App\Teachers;
class EdeptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('edept.index')->with('edept',Edept::all());
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
       return view('edept.create')->with('teachers',Teachers::all());//->with('prefs',Pref::all());
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
			 "contentd"  => "required",
			"teachers_id"  => "required",
			//"prefs_id"  => "required",
            "featured" => "required|image",
			"featuredg" => "required|file",
			"featuredm" => "required|file"
            
        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
       $featured->move('uploads/posts',$featured_new_name);
	   
	   
	   
	    $featuredg = $request->featuredg;
        $featuredg_new_name = time().$featuredg->getClientOriginalName();
       $featuredg->move('uploads/posts',$featuredg_new_name);
	   
	   
	   
	    $featuredm = $request->featuredm;
        $featuredm_new_name = time().$featuredm->getClientOriginalName();
       $featuredm->move('uploads/posts',$featuredm_new_name);
	   
	   
	   


         $edept = Edept::create([
            "name"    => $request->name,
            "content"  => $request->content,
			"contentd"  => $request->contentd,
			"teachers_id"  => $request->teachers_id,
			//"prefs_id"  => $request->prefs_id,
            "featrued" => 'uploads/posts/'.$featured_new_name,
			 "featruedg" => 'uploads/posts/'.$featuredg_new_name,
			  "featruedm" => 'uploads/posts/'.$featuredm_new_name,
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
        $edept = Edept::find($id);
        return view('edept.edit')->with('edept',$edept )->with('teachers',Teachers::all());//->with('prefs',Pref::all());
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
      $edept = Edept::find($id);

        $this->validate($request,[
            "name"    => "required",
            "content"  => "required",
			"contentd"  => "required",
			"teachers_id"  => "required",
			//"prefs_id"  => "required" 
            
        ]);


        if ( $request->hasFile('featured')  ) {
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/posts/',$featured_new_name);

            $edept->featrued = 'uploads/posts/'.$featured_new_name;
    
        }
		
		
		
		 if ( $request->hasFile('featuredg')  ) {
            $featuredg = $request->featuredg;
            $featuredg_new_name = time().$featuredg->getClientOriginalName();
            $featuredg->move('uploads/posts/',$featuredg_new_name);

            $edept->featruedg = 'uploads/posts/'.$featuredg_new_name;
    
        }
		
		
		
		
		 if ( $request->hasFile('featuredm')  ) {
            $featuredm = $request->featuredm;
            $featuredm_new_name = time().$featuredm->getClientOriginalName();
            $featuredm->move('uploads/posts/',$featuredm_new_name);

            $edept->featruedm = 'uploads/posts/'.$featuredm_new_name;
    
        }
		
		
		
		
		
        $edept->name =  $request->name;
        $edept->content =  $request->content;
		$edept->contentd =  $request->contentd;
		$edept->teachers_id = $request->teachers_id;
		//$edept->prefs_id = $request->prefs_id;
        $edept->save();

       
        
        return redirect()->route('edepts');
    }
	
	
	
	
	

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edept =  Edept::find($id);
        
        $edept->delete($id);
        return redirect()->back();
    }
}

