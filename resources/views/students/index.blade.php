@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Students List</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Age</th>
                <th>Photo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->age }}</td>
                    <td>
                        @if ($student->photo)
                            <img src="{{ asset('storage/' . $student->photo) }}" alt="Photo" width="50">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
