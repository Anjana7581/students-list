@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Guardian Details</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $guardian->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Contact Info:</strong> {{ $guardian->contact_info }}</p>
            <p><strong>Associated Student:</strong> {{ $guardian->student->name }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('guardians.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
