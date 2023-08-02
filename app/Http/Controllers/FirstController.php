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

    public function studentFrom()
    {
        return view('from');
    }

    public function store(Request $request)
    {
                   $validatedData = $request->validate([
                'name' => ['required','max:255'],
                'email' => ['required','max:255'],
                'password' => ['required','min:6'],
            ]);
    }
}
