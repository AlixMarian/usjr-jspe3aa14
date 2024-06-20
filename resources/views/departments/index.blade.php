<!DOCTYPE html>
<html>
<head>
    <title>All Departments</title>
</head>
<body>
    <h1>All Departments</h1>
    @foreach($departments as $department)
        <div>
            <h2>{{ $department->deptfullname }}</h2>
            <p>College: {{ $department->college->collfullname }}</p>
        </div>
    @endforeach
</body>
</html>
