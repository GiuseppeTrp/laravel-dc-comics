<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titolo</title>

    @vite('resources/js/app.js')
    @include('partials.nav')

</head>
<body>

    @yield('content')
    
</body>
</html>