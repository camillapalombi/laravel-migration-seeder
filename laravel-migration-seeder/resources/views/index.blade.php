<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Treni in partenza oggi:</h1>
    </header>
    <main>
        <div class="container-all-cards">

        @foreach ($trains as $train)
                <div class="single-card">
                    <ul>
                        <li> <h3> {{ $train->company }} </h3> </li>
                        <li> {{ $train->trainCode }}</li>
                        <li> <h4>Partenza:</h4> {{ $train->departureStation }} </li>
                        <li> <h4>Arrivo:</h4> {{ $train->arrivalStation }}</li>
                        <li> <h4>Orario Partenza:</h4> {{ $train->departureTime }}</li>
                        <li> <h4>Orario Arrivo:</h4> {{ $train->arrivalTime }}</li>
                        
                    </ul>
                </div>
            @endforeach

        </div>



    </main>

    <footer>
        <div class="container-pagination">
            
            <a href="">{{ $trains->links() }}</a>
            
        </div>
    </footer>
</body>
</html>

