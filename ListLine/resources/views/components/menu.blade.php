@props(['admin' => false])

<nav id="menu" class="menu hidden z-10 fixed">
    <div id="closeMenuButton" class="closeMessageBoxButton color2">X</div>
    <img src="{{asset( 'images/ListLineClean.png' )}}" class="profilePicture"></img>
    <a href="/" class="menuOption flex items-center justify-center">Dashboard</a>
    <a href="{{ url('total/pdf') }}" class="menuOption flex items-center justify-center" target="blank">Mostrar reporte</a>
    @if ($admin)
        <a href="{{ url('total/create') }}" class="menuOption flex items-center justify-center">Crear reporte</a>
        <a href="{{ url('auth/register') }}" class="menuOption flex items-center justify-center">Registrar usuario</a>
    @endif
    <a href="{{ url('message/create')}}" class="menuOption flex items-center justify-center">Enviar mensaje</a>
    <a href={{ route("auth.logout") }} class="menuOption flex items-center justify-center">Cerrar sesión</a>
</nav>
