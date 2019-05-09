<!DOCTYPE html>
<html>
<head>
    <title>Basecamp Clone</title>
</head>

<body>
    <h1>Basecamp Clone</h1>

    <ul>
        @forelse($projects as $project)
            <li>
                <a href="{{ $project->path() }}">{{ $project->title }}</a>
            </li>
        @empty
            <li>No projects yet.</li>
        @endforelse
    </ul>
</body>

</html>
