@extends ('layouts.app')

@section('content')
<h1>Create a Project</h1>

<form method="POST" action="/projects">
    @csrf
    <input type="text" name="title" placeholder="title">
    <textarea name="description"></textarea>

    <button type="submit">Create Projects</button>
    <a href="/projects">Cancel</a>
</form>
@endsection
