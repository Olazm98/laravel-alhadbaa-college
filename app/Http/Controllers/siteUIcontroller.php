<?php

namespace App\Http\Controllers;
use\App\Edept;
use\App\Teachers;
use\App\Post;
use\App\Emange;
use\App\Aboutus;
use\App\callus;
use Illuminate\Http\Request;

class siteUIcontroller extends Controller
{
    public function index()
    {
        return view('index')->with('name',Edept::first()->name)
		                    ->with('teachers',Teachers::all());
	}	
}
