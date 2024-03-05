<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function register(Request $request){
        $result = $request->all();
        return view ('result',compact('result'));
    }
}
