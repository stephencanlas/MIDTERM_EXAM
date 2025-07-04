@extends('layouts.app')

@section('content')
    <h4>Edit Instructor</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('instructors.update', $instructor) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Instructor Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $instructor->name) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Department</label>
            <select name="department_id" class="form-select" required>
                <option value="">-- Select Department --</option>
                @foreach($departments as $department)
                    <option value="{{ $department->id }}" {{ $instructor->department_id == $department->id ? 'selected' : '' }}>
                        {{ $department->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('instructors.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
