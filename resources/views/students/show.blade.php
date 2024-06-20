<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h1>{{ $student->studfirstname }} {{ $student->studlastname }}</h1>
    <p>Program: {{ $student->program->progfullname }}</p>
    <p>College: {{ $student->college->collfullname }}</p>
</body>
</html>
