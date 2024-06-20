<!DOCTYPE html>
<html>
<head>
    <title>College Details</title>
</head>
<body>
    <h1>{{ $college->collfullname }}</h1>
    <h3>Departments</h3>
    <ul>
        @foreach($college->departments as $department)
            <li>{{ $department->deptfullname }}</li>
        @endforeach
    </ul>
    <h3>Programs</h3>
    <ul>
        @foreach($college->programs as $program)
            <li>{{ $program->progfullname }}</li>
        @endforeach
    </ul>
</body>
</html>
