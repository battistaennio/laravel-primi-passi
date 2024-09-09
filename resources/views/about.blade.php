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

    <h1>{{ $title }}:</h1>

    <p>{{ $description }}</p>

</body>

</html>
