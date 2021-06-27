<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form1;
use App\Teachers;
class Form1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form1.index')->with('form1',Form1::all());
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
       return view('form1.create')->with('teachers',Teachers::all());//->with('prefs',Pref::all());
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
            "stage"  => "required",
			"featured" => "required|image",
			"teachers_id"  => "required",
            "typestu" => "required",
			"addres" => "required",
			"bd" => "required"
            
        ]);

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
       $featured->move('uploads/posts',$featured_new_name);
	   
	   
	   
	   


         $form1 = Form1::create([
            "name"    => $request->name,
            "stage"  => $request->stage,
			"typestu"  => $request->typestu,
			"teachers_id"  => $request->teachers_id,
            "featrued" => 'uploads/posts/'.$featured_new_name,
			 "addres" => $request->addres,
			  "bd" => $request->bd,
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
        $form1 = Form1::find($id);
        return view('form1.edit')->with('form1',$form1 )->with('teachers',Teachers::all());//->with('prefs',Pref::all());
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
      $form1 =Form1::find($id);

        $this->validate($request,[
			 "name"    => "required",
            "stage"  => "required",
			"teachers_id"  => "required",
            "typestu" => "required",
			"addres" => "required",
			"bd" => "required",
            
        ]);


        if ( $request->hasFile('featured')  ) {
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/posts/',$featured_new_name);

            $form1->featrued = 'uploads/posts/'.$featured_new_name;
    
        }
		
		
		
		
		
        $form1->name =  $request->name;
        $form1->stage =  $request->stage;
		$form1->typestu =  $request->typestu;
		$form1->teachers_id = $request->teachers_id;
		$form1->addres = $request->addres;
		$form1->bd = $request->bd;
		//$edept->prefs_id = $request->prefs_id;
        $form1->save();

       
        
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
        $form1 =  Form1::find($id);
        
        $form1->delete($id);
        return redirect()->back();
    }
}

