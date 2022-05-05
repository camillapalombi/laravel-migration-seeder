<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
    <header>
        <h1>Treni in partenza oggi:</h1>
    </header>
    <main>

        @foreach ($trains as $train)
                <div class="single-card">
                    <ul>
                        <li> <h3> {{ $train->company }} </h3> </li>
                        <li> <h4> Partenza: {{ $train->departureStation }} </h4> </li>
                        <li> Arrivo: {{ $train->arrivalStation }}</li>
                        <li> Orario partenza: {{ $train->departureTime }}</li>
                        <li> Orario arrivo: {{ $train->arrivalTime }}</li>
                        <li> {{ $train->trainCode }}</li>
                    </ul>
                </div>
            @endforeach



    </main>
</body>
</html>