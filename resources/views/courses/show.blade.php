@extends('layouts.app')

@section('content')
    <h4>Course Details</h4>

    <div class="mb-3">
        <strong>ID:</strong> {{ $course->id }}
    </div>

    <div class="mb-3">
        <strong>Title:</strong> {{ $course->title }}
    </div>

    <div class="mb-3">
        <strong>Instructor:</strong> {{ $course->instructor->name }}
    </div>

    <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
@endsection
