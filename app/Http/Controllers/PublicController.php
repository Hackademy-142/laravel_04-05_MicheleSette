<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage () {
        return view('welcome');
    }


    public function contattaci() 
    {
        return view('contattaci');
    }

    public function submit(Request $request) //!dependency injection
    {
        dd($request->all());
    }
}
