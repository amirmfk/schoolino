<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\schoolclass;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
         $students=Student::orderBy('id','desc')->paginate(5);
         return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('student.index')->with('success','Student has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with('success','Student has been deleted successfully');
    }

    public function studentSearch()
    {
        $schoolclass = schoolclass::all();
        return view('students.studentSearch', compact('schoolclass'));
    }

    public function setSpecifiecStudent(Request $request)
    {
        $s = DB::table('schoolclasses')->where('name', $request->name)->first();
//        dd($s->id);
        $student = schoolclass::find($s->id)->student();
//        dd($student);
          return view('students.studentindex',compact('student'));
    }
}
