<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calcul;
class CalculController extends Controller
{
    public function index()
    {
        return view('calcul.index')->with('calcul',Calcul::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('calcul.create');
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
            "st"    => "required",
            "gr"  => "required",
			"em"  => "required",
			"pr"  => "required"
			
			
        ]);

            $calcul = Calcul::create([
            "st"    => $request->st,
            "gr"  => $request->gr,
			"em"  => $request->em,
			"pr"  => $request->pr,
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
        $calcul = Calcul::find($id);
        return view('calcul.edit')->with('calcul',$calcul );
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
      $calcul = Calcul::find($id);

        $this->validate($request,[
		
		    "st"    => "required",
            "gr"  => "required",
			"em"  => "required",
			"pr"  => "required"
    
            
        ]);


       
            $calcul->st =  $request->st;
            $calcul->gr = $request->gr;
			$calcul->em = $request->em;
			$calcul->pr = $request->pr;
			
            $calcul->save();

       
        
        return redirect()->route('calcul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $calcul =  Calcul::find($id);
        
        $calcul->delete($id);
        return redirect()->back();
    }
}
