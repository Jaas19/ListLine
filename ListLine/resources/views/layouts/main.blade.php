<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListLine</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!--class="hidden"-->
    <div class="bgImg -z-10" style="filter: brightness(150%); background-image: url({{ asset('images/Fondo.jpg') }})"></div>
    {{ $slot }}

    <script src="{{ asset("js/menu.js") }}"></script>
    @isset($script)
        <script src="{{ asset($script) }}"></script>
    @endisset
</body>
</html>
