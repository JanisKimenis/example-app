<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izveidot jaunu ziņu</title>
</head>

<body>
    <h1>Izveidot jaunu bloga ziņu</h1>

    <form method="POST" action="{{ url('/posts/store') }}">
        @csrf {{-- Obligāti Laravel CSRF aizsardzībai --}}

        <div>
            <label for="title">Virsraksts:</label><br>
            <input type="text" id="title" name="title" required>
        </div>
        <br>
        <div>
            <label for="content">Saturs:</label><br>
            <textarea id="content" name="content" rows="10" required></textarea>
        </div>
        <br>
        <button type="submit">Saglabāt ziņu</button>
    </form>

    <br>
    <a href="{{ url('/posts') }}">Atpakaļ uz ziņu sarakstu</a>
</body>

</html>
