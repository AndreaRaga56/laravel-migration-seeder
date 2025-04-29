<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/sass/app.scss')
    <title>Home</title>
</head>

<body>
    <header class="p-4">
        <h1>Ciao</h1>
    </header>
    @dd($treni, $today)
    {{-- @php
        var_dump($today->date);
    @endphp --}}

    {{ $today }}
</body>

</html>
