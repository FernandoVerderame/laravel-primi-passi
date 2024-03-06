<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>
</head>

<body>
    <div class="navbar">
        @foreach ($links as $link)
        <a href="{{ route($link) }}">{{ $link }}</a>
        @endforeach
    </div>

    <h1>Hello World!</h1>

    <h2>To Do List</h2>
    @forelse ($tasks as $task)
    <div>{{ $task }}</div>
    @empty
    <h3>Non ci sono tasks!</h3>
    @endforelse

</body>

</html>