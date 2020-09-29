<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::all();
        return view('welcome',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'FirstName' => 'required',
            'LastName' => 'required',
            'FatherName' => 'required',
            'Roll' => 'required',
            'Class' => 'required',
            'AttendenceStatus' => 'required'
        ]);
        $student = new Students;
        $student->first_name = $request->FirstName;
        $student->last_name = $request->LastName;
        $student->father_name = $request->FatherName;
        $student->roll_no = $request->Roll;
        $student->class = $request->Class;
        $student->attendence_status = $request->AttendenceStatus;
        $student->save();
        return redirect(route('index'))->with('Msg', 'Student recorded is added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Students::find($id);
        return view('edit', compact('student'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'FirstName' => 'required',
            'LastName' => 'required',
            'FatherName' => 'required',
            'Roll' => 'required',
            'Class' => 'required',
            'AttendenceStatus' => 'required'
        ]);
        $student = Students::find($id);
        $student->first_name =  $request->FirstName;
        $student->last_name = $request->LastName;
        $student->father_name = $request->FatherName;
        $student->roll_no = $request->Roll;
        $student->class = $request->Class;
        $student->attendence_status = $request->AttendenceStatus;
        $student->save();
        return redirect(route('index'))->with('Msg', 'Record is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
