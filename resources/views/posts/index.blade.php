<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>

<body>
    <h1>Mūsu Bloga Ziņas</h1>

    {{-- Jaunā saite --}}
    <a href="{{ url('/posts/create') }}">Izveidot jaunu ziņu</a>

    @if ($posts->isEmpty())
        <p>Pagaidām nav nevienas ziņas.</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                    <small>Izveidots: {{ $post->created_at->format('Y-m-d H:i') }}</small>
                </li>
            @endforeach
        </ul>
    @endif
</body>

</html>
