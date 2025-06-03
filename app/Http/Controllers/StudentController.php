<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Department;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with(['department', 'courses'])->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $departments = Department::all();
        $courses = Course::all();
        return view('students.create', compact('departments', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'department_id' => 'required|exists:departments,id',
            'courses' => 'required|array',
            'courses.*' => 'exists:courses,id'
        ]);

        $student = Student::create($request->only('name', 'department_id'));
        $student->courses()->attach($request->courses);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }
}
