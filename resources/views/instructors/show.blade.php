@extends('layouts.app')

@section('content')
    <h4>Instructor Details</h4>

    <div class="mb-3">
        <strong>ID:</strong> {{ $instructor->id }}
    </div>

    <div class="mb-3">
        <strong>Name:</strong> {{ $instructor->name }}
    </div>

    <div class="mb-3">
        <strong>Department:</strong> {{ $instructor->department->name }}
    </div>

    <a href="{{ route('instructors.edit', $instructor) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('instructors.index') }}" class="btn btn-secondary">Back</a>
@endsection
