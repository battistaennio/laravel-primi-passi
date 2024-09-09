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

    @if (count($socials) >= 1)
        <h3>Seguici su:</h3>

        <ul>
            @foreach ($socials as $detail)
                <li>{{ $detail }}</li>
            @endforeach
        </ul>
    @else
        <h3>L'array è vuoto :(</h3>
    @endif
