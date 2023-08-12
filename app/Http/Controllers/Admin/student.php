<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use DB;

class student extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $student =DB::table('students')->orderBy('id','ASC')->get();
        return view('admin.student.index',compact('student'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $class=DB::table('class')->get();
        return view('admin.student.create',compact('class'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data=array(
        'class_id' =>$request->class_id,
        'stu_name' =>$request->stu_name,
        'stu_roll' =>$request->stu_roll,
        'stu_email' =>$request->stu_email,
        'stu_phone' =>$request->stu_phone,
        'stu_address' =>$request->stu_address

       );

       DB::table('students')->insert($data);
       return view('admin.student.index'); 

          }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $class=DB::table('class')->get();
      $students=DB::table('students')->where('id',$id)->first();
    return view('admin.student.edit',compact('class','students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $data=array(
        'class_id' =>$request->class_id,
        'stu_name' =>$request->stu_name,
        'stu_roll' =>$request->stu_roll,
        'stu_email' =>$request->stu_email,
        'stu_phone' =>$request->stu_phone,
        'stu_address' =>$request->stu_address

       );

       DB::table('students')->where('id',$id)->update($data);
       return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       DB::table('students')->where('id',$id)->delete();
       return redirect()->back();
    }
}
