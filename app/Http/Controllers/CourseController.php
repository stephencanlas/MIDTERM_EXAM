<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Department;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('instructor')->get();
        return view('courses.index', compact('courses'));
    }

    public function create()
{
    $departments = Department::all();
    $instructors = Instructor::all();
    return view('courses.create', compact('instructors', 'departments'));
}


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required', 
            'instructor_id' => 'required|exists:instructors,id',
            'department_id' => 'required|exists:departments,id',
            'credit_id' => 'required|numeric',
        ]);

        Course::create($request->only('title', 'department_id', 'instructor_id', 'credit_id'));

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    public function edit(Course $course)
{
    $departments = Department::all();
    $instructors = Instructor::all();
    return view('courses.edit', compact('course', 'instructors', 'departments'));
}

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required',
            'instructor_id' => 'required|exists:instructors,id',
            'department_id' => 'required|exists:departments,id',
            'credit_id' => 'required|numeric',
        ]);

        $course->update($request->only('title', 'department_id', 'instructor_id', 'credit_id'));

        return redirect()->route('courses.index')->with('success', 'Course updated.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted.');
    }
}
