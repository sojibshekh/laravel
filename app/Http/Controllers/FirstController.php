<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view('about');
    }

    public function country()
    {
        return  view('country');
    }
    public function studentStore(Request $request)
    {
        dd($request->all());
    }
}
