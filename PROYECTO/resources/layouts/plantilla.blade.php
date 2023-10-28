<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])

</head>
<body>
    @include('partials.barra_navegacion')

@yield('contenido')
    
</body>
</html>