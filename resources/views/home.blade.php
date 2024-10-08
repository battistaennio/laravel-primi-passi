{{-- A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view welcome.blade.php e creiamo una nostra homepage. Facciamo quindi sì che la rotta / visualizzi home.blade.php
Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.
Alla view fra i dati che passate ci deve essere almeno un array che viene ciclato in pagina
Il file blade deve anche contenere almeno una espressione condizionale
Bonus:
Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route() --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primi Passi | Laravel</title>
</head>

<body>

    <header>

        <nav>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>

                <li>
                    <a href="/about-us">About Us</a>
                </li>

                <li>
                    <a href="/social">Social</a>
                </li>
            </ul>
        </nav>

    </header>

    <h1>{{ $title }}</h1>
    <h2>{{ $subtitle }}</h2>

    @if (count($mvc) >= 1)
        <h3>Laravel è un framework PHP che segue l'architettura MVC:</h3>

        <ul>
            @foreach ($mvc as $detail)
                <li>{{ $detail }}</li>
            @endforeach
        </ul>
    @else
        <h3>L'array è vuoto :(</h3>
    @endif

</body>

</html>
