<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class learnController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return "this is my invoke method ";
    }
}
