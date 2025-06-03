<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\Department;

class InstructorController extends Controller
{

// Inside InstructorController
public function index()
{
    $instructors = Instructor::with('department')->get();
    return view('instructors.index', compact('instructors'));
}

public function create()
{
    $departments = Department::all();
    return view('instructors.create', compact('departments'));
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'department_id' => 'required|exists:departments,id'
    ]);
    Instructor::create($request->all());
    return redirect()->route('instructors.index')->with('success', 'Instructor created.');
}

public function show(Instructor $instructor)
{
    return view('instructors.show', compact('instructor'));
}

public function edit(Instructor $instructor)
{
    $departments = Department::all();
    return view('instructors.edit', compact('instructor', 'departments'));
}

public function update(Request $request, Instructor $instructor)
{
    $request->validate([
        'name' => 'required',
        'department_id' => 'required|exists:departments,id'
    ]);
    $instructor->update($request->all());
    return redirect()->route('instructors.index')->with('success', 'Instructor updated.');
}

public function destroy(Instructor $instructor)
{
    $instructor->delete();
    return redirect()->route('instructors.index')->with('success', 'Instructor deleted.');
}

}
