<!DOCTYPE html>
<html>
<head>
    <title>All Colleges</title>
</head>
<body>
    <h1>All Colleges</h1>
    @foreach($colleges as $college)
        <div>
            <h2>{{ $college->collfullname }}</h2>
            <ul>
                @foreach($college->programs as $program)
                    <li>{{ $program->progfullname }}</li>
                @endforeach
            </ul>
            <a href="{{ url('/show/college', $college->collid) }}">Show</a>
        </div>
    @endforeach
</body>
</html>
