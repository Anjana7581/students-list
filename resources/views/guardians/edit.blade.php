@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Guardian</h1>
    <form action="{{ route('guardians.update', $guardian->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" value="{{ $guardian->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="contact_info" class="form-label">Contact Info</label>
            <input type="text" name="contact_info" id="contact_info" value="{{ $guardian->contact_info }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="student_id" class="form-label">Associated Student</label>
            <select name="student_id" id="student_id" class="form-control" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" 
                            @if($guardian->student_id == $student->id) selected @endif>
                        {{ $student->id }}. {{ $student->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('guardians.index') }}" class="btn btn-secondary">Cancel</a>

    </form>
</div>
@endsection
