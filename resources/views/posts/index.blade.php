<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>

<body>
    <h1>Mūsu Bloga Ziņas</h1>

    <a href="{{ route('posts.create') }}">Izveidot jaunu ziņu</a> {{-- Izmantojam nosaukto ceļu --}}

    @if ($posts->isEmpty())
        <p>Pagaidām nav nevienas ziņas.</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>
                    {{-- Unikālā saite uz katru ierakstu --}}
                    <h2><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h2>
                    <p>{{ $post->content }}</p>
                    <small>Izveidots: {{ $post->created_at->format('Y-m-d H:i') }}</small>
                    <br>
                    <a href=
                    "{{ route('posts.destroy_get', $post->id) }}"
                        onclick="return confirm('Vai tiešām vēlies izdzēst šo ziņu?');">
                        Dzēst (GET)</a>
                </li>
            @endforeach
        </ul>
    @endif
</body>

</html>
