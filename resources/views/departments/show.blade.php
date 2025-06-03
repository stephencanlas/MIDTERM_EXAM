@extends('layouts.app')

@section('content')
    <h4>Department Details</h4>

    <div class="mb-3">
        <strong>ID:</strong> {{ $department->id }}
    </div>

    <div class="mb-3">
        <strong>Name:</strong> {{ $department->name }}
    </div>

    <a href="{{ route('departments.edit', $department) }}" class="btn btn-warning">Edit</a>
    <a href="{{ route('departments.index') }}" class="btn btn-secondary">Back</a>
@endsection
