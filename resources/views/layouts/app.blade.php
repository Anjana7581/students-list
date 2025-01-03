<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">School Management</a>

        <div class="ml-auto d-flex">
            <a class="nav-link px-3" href="{{ route('students.index') }}">Students</a>
            <a class="nav-link px-3" href="{{ route('guardians.index') }}">Guardians</a>
        </div>
    </div>
</nav>





    <div class="container">
        @yield('content')
    </div>
</body>
</html>
