@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Guardian</h1>
    <form action="{{ route('guardians.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
    <label for="contact_info" class="form-label">Contact Number</label>
    <input type="tel" name="contact_info" id="contact_info" class="form-control" required pattern="\+?[0-9]{1,4}?[0-9\s\-()]{3,15}" placeholder="Enter phone number">
</div>


        <div class="mb-3">
            <label for="student_id" class="form-label">Associated Student</label>

            <select name="student_id" id="student_id" class="form-control" required>
            <option value="" disabled selected>Select a student</option>
            @foreach ($students as $student)
            <option value="{{ $student->id }}">{{ $student->id }}. {{ $student->name }}</option>
            @endforeach
            </select>

            @error('student_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('guardians.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
