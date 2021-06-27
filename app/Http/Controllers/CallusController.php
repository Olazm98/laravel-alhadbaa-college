<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Callus;
class CallusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('callus.index')->with('callus',Callus::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('callus.create');
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
            "facebook"  => "required",
			"youtube"  => "required",
			"instagram"  => "required",
			"telegram"  => "required",
			"e_learning"  => "required",
			"t_number"  => "required"
			
        ]);

            $callus = Callus::create([
            "title"    => $request->title,
            "facebook"  => $request->facebook,
			"youtube"  => $request->youtube,
			"instagram"  => $request->instagram,
			"telegram"  => $request->telegram,
			"e_learning"  => $request->e_learning,
			"t_number"  => $request->t_number,
            
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
        $callus = Callus::find($id);
        return view('callus.edit')->with('callus',$callus );
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
      $callus = Callus::find($id);

        $this->validate($request,[
            "title"    => "required",
            "facebook"  => "required",
			"youtube"  => "required",
			"instagram"  => "required",
			"telegram"  => "required",
			"e_learning"  => "required",
			"t_number"  => "required"
            
        ]);


       
            $callus->title =  $request->title;
            $callus->facebook = $request->facebook;
			$callus->youtube = $request->youtube;
			$callus->instagram = $request->instagram;
			$callus->telegram = $request->telegram;
			$callus->e_learning = $request->e_learning;
		    $callus->t_number  = $request->t_number;
            $callus->save();

       
        
        return redirect()->route('callus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $callus =  Callus::find($id);
        
        $callus->delete($id);
        return redirect()->back();
    }
}
