<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network</title>
@vite('resources/css/app.css')
</head>
<body class ="bg-gray-200">

@if(session("success"))
    <div class="p-4 text-center bg-green-50 text-green-500 font-bold">
    {{ session("success") }}
    </div>
@endif

<nav class="pb-5 bg-white lg:px-36 px-3 py-5 lg:flex space-y-1 items-center justify-between">
    <h3 class="text-red-400 font-extrabold text-lg">Developer Network</h3>
    <ul class="text-sm flex items-center justify-end gap-5 font-medium ">
        <li class="hover:text-red-400 transition delay-100 duration-300"><a href={{ route("developer.index") }}>All Developers</a></li>
        <li class="hover:text-red-400 transition delay-100 duration-300"><a href={{ route("developer.create") }}>Create New Developer</a></li>
    </ul>
</nav>

<menu class="lg:px-36 px-5 pb-10">
{{ $slot }}
</menu>
    
    <footer class="font-semibold text-center pb-5">
        <p>@copyright <span class="text-red-600 uppercase">surecoders</span></p>
    </footer>
</body>
</html>