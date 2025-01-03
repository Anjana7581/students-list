@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Student Details</h1>

    <div class="card">
        <div class="card-header">
            <h2>{{ $student->name }}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    @if ($student->photo)
                        <img src="{{ Storage::url($student->photo) }}" alt="Student Photo" class="img-thumbnail" style="max-width: 120px; float: left; margin-right: 20px;">
                    @else
                        <p>No photo available</p>
                    @endif
                </div>
                <div class="col-md-9">
                    <p><strong>Class:</strong> {{ $student->class }}</p>
                    <p><strong>Age:</strong> {{ $student->age }}</p>
                    <p><strong>Guardian:</strong> {{ $student->guardians->first()->name ?? 'No guardian assigned' }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('students.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
