@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Guardians List</h1>
    <a href="{{ route('guardians.create') }}" class="btn btn-primary mb-3">Add Guardian</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact Info</th>
                <th>Associated Student</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guardians as $guardian)
                <tr>
                    <td>{{ $guardian->id }}</td>
                    <td>{{ $guardian->name }}</td>
                    <td>{{ $guardian->contact_info }}</td>
                    <td>{{ $guardian->student->name }}</td>
                    <td>
                        <a href="{{ route('guardians.show', $guardian->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('guardians.edit', $guardian->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('guardians.destroy', $guardian->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this guardian?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
