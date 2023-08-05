<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    // __construct
    public function __construct()
    {
    	$this->middleware('auth');
    }

    // index class for all call database
    public function index()
    {
    	$class=DB::table('class')->get();
    	return view('admin.class.index',compact('class'));
    }

    // create from page show now
    public function create()
    {
    	return view('admin.class.create');
    }

    // store class code here
    public function store(Request $request )
    {
    	$validatedData = $request->validate([
                'class_name' => ['required', 'unique:class']
                
            ]);

    	$data= array(
            'class_name'=>$request->class_name,
    	 );
    	DB::table('class')->insert($data);
    	return view('admin.class.index');
    }
}
