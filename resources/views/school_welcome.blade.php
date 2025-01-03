<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center mt-5">
        <h1>Welcome to School Management System</h1>
        <p>Manage your school’s students, guardians, and more with ease</p>

        <div class="mt-4">
            <a href="{{ route('students.index') }}" class="btn btn-outline-primary">Manage Students</a>
            <a href="{{ route('guardians.index') }}" class="btn btn-outline-primary">Manage Guardians</a>
        </div>
        
    </div>
</body>
</html>
