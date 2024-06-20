<!DOCTYPE html>
<html>
<head>
    <title>All Students</title>
</head>
<body>
    <h1>All Students</h1>
    @foreach($students as $student)
        <div>
            {{ $student->studfirstname }} {{ $student->studlastname }}
            <a href="{{ url('/show/student', $student->studid) }}">Show</a>
        </div>
    @endforeach
</body>
</html>
