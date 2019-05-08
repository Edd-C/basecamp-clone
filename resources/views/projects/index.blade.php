<!DOCTYPE html>
<html>
<head>
    <title>Basecamp Clone</title>
</head>

<body>
    <h1>Basecamp Clone</h1>

    <ul>
        @foreach($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>
</body>

</html>
