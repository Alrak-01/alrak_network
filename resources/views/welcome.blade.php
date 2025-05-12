<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network</title>
@vite('resources/css/app.css')
</head>
<body class ="text-center text-blue-900">

    <main class="pt-10 font-semibold">
        <h1 class = "text-center text-xl text-red-400 font-bold">Welcome to the developer network.</h1>
    <p class="text-stone-500 text-lg pb-5">Click the button to get started.</p>
    <a href="/developers" class="text-gray-600 bg-gray-200 text-sm p-2 rounded-sm hover:bg-red-400 hover:text-white transition delay-100 duration-300">
        Get started...
    </a>
    </main>
</body>
</html>