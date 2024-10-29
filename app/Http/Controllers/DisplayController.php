<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
   //

   public function displayMeth(Request $request){
    $name = $request->input('name');
    return view('display', ['name'=>$name]);
   }
}
