<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\schoolclass;
use App\Http\Requests\StoreschoolclassRequest;
use App\Http\Requests\UpdateschoolclassRequest;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class SchoolclassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schoolclasses = Schoolclass::orderBy('id','desc')->paginate(5);

        return view('schoolclasses.index',compact('schoolclasses') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schoolclasses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Schoolclass::create($request->all());
        return redirect()->route('schoolclass.index')->with('success','School Class Was Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(schoolclass $schoolclass)
    {
        return view('schoolclasses.show',compact('schoolclass'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(schoolclass $schoolclass)
    {
       return view('schoolclasses.edit',compact('schoolclass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, schoolclass $schoolclass)
    {
        $schoolclass->update($request->all());
        return redirect()->route('schoolclass.index')->with('success','Class Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(schoolclass $schoolclass)
    {
        $schoolclass->delete();
        return redirect()->route('schoolclass.index')->with('success','School Class Has Been Deleted Successfully');
    }
}
