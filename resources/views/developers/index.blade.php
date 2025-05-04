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
    <li>
        <a href="/show/{{$developer[0]["id"]}}">
            {{ $developer[0]["name"] }}
        </a>
    </li>
    <li>
        <a href="/show/{{$developer[1]["id"]}}">
            {{ $developer[1]["name"] }}
        </a>
    </li>
    <li>
        <a href="/show/{{$developer[2]["id"]}}">
            {{ $developer[2]["name"] }}
        </a>
    </li>
    </ul>
</body>
</html>