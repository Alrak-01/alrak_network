<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alrak Network | Home</title>
</head>
<body>
    <h2>We're currently in the developers page</h2>
    <p>View the list of developers below</p>
    <ul>

    @foreach( $developers as $developer)
        <li>
        <p> {{ $developer["name"] }} </p>
        <a href="/developer/{{ $developer["id"] }}">
            View details
        </a>
    </li>
    @endforeach
    </ul>
</body>
</html>