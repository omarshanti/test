<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Newscontroller extends Controller
{
   
    public function getHome(){
        $data = ['Omar Al Shanti',34];
       return view (view:'home')->with('data',$data);
    }
    
}

