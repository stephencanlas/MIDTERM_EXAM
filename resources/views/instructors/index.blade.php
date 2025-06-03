@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Instructors</h4>
        <a href="{{ route('instructors.create') }}" class="btn btn-primary">Add Instructor</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($instructors as $instructor)
                <tr>
                    <td>{{ $instructor->id }}</td>
                    <td>{{ $instructor->name }}</td>
                    <td>{{ $instructor->department->name }}</td>
                    <td>
                        <a href="{{ route('instructors.show', $instructor) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route('instructors.edit', $instructor) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('instructors.destroy', $instructor) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this instructor?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4">No instructors found.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
