@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}" required>
        </div>
        <div class="mb-3">
            <label for="class" class="form-label">Class</label>
            <input type="text" name="class" id="class" class="form-control" value="{{ $student->class }}" required>
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ $student->age }}" required>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Photo</label>
            <input type="file" name="photo" id="photo" class="form-control">
            @if ($student->photo)
                <img src="{{ asset('storage/' . $student->photo) }}" alt="Current Photo" width="100" class="mt-2">
            @endif
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>

    </form>
</div>
@endsection
