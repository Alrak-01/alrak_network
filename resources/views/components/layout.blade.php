<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/developers">Developers</a></li>
        <li><a href="/developers/create">create Developers</a></li>
    </ul>
</nav>

<menu>
{{ $slot }}
</menu>
    
    <footer>
        <p>@copyright surecoders</p>
    </footer>
</body>
</html>