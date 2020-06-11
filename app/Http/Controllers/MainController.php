<?php

namespace App\Http\Controllers;

  use Illuminate\Http\Request;
use App\Historia;
class MainController extends Controller

  {
  	    public function index ()
    {
    	$historias=Historia::all();
    	return view('main')->with(['historias' => $historias]);
    	
    	}
    	public function show(Historia $historia)
    {
     
        return view('historia')->with(['historia' => $historia]);
    }

}
