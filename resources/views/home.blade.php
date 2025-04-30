<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    @vite('resources/sass/app.scss')
    <title>Home</title>
</head>

<body>
    <header class="p-4">
        <h1>ORARI DEI TRENI</h1>
    </header>

    <div class="container mt-4">
        <table>
            <tr>
                <th>Codice</th>
                <th>Azienda</th>
                <th>Carrozze</th>
                <th>Partenza</th>
                <th>Arrivo</th>
                <th>Orario di Partenza</th>
                <th>Arrivo Stimato</th>
                <th>In Orario</th>
                <th>Cancellato</th>
            </tr>

            @foreach ($treni as $treno)
                <tr>
                    <td>{{ $treno->codice_treno }}</td>
                    <td>{{ $treno->azienda }}</td>
                    <td class="text-center">{{ $treno->totale_carrozze }}</td>
                    <td>{{ $treno->stazione_di_partenza }}</td>
                    <td>{{ $treno->stazione_di_arrivo }}</td>
                    <td>{{ $treno->orario_di_partenza }}</td>
                    <td>{{ $treno->orario_di_arrivo }}</td>
                    @if($treno->is_in_orario == 1)
                        <td class="text-center">SÌ</td>
                    @else
                        <td class="text-center ritardo">NO</td>
                    @endif
                    @if($treno->is_cancellato == 1)
                        <td class="text-center cancellato">SÌ</td>
                    @else
                        <td class="text-center">NO</td>
                    @endif
                <tr>
            @endforeach

        </table>
    </div>

</body>

</html>
