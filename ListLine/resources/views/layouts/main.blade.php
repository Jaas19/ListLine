<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ListLine</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @if($errors->any())
        <ul class="notification hidden">
                <div class="notificationHeader">Error</div>
            @foreach ($errors->all() as $error)
                <li class="notificationMessage">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if(session("error"))
        <ul class="notification hidden">
                <div class="notificationHeader">Error</div>
                <li class="notificationMessage">{{ session("error") }}</li>
        </ul>
    @endif

    @if(session("success"))
        <ul class="notification hidden">
                <div class="notificationHeader">Éxito</div>
                <li class="notificationMessage">{{ session("success") }}</li>
        </ul>
    @endif
    <div class="bgImg -z-10" style="filter: brightness(150%); background-image: url({{ asset('images/Fondo.jpg') }})"></div>
    {{ $slot }}

    <script src="{{ asset("js/menu.js") }}"></script>
    <script src="{{ asset("js/validation.js") }}"></script>
    @isset($script)
        <script src="{{ asset($script) }}"></script>
    @endisset
</body>
</html>
