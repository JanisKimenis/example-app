<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
</head>

<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <small>Izveidots: {{ $post->created_at->format('Y-m-d H:i') }}</small>
    <br>
    <a href="{{ route('posts.index') }}">Atpakaļ uz ziņu sarakstu</a>
</body>

</html>
