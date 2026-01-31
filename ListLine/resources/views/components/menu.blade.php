@props(['admin' => false])

<nav id="menu" class="menu hidden z-20 fixed">
    <div id="closeMenuButton" class="closeMessageBoxButton color2">X</div>
    <img src="{{asset( 'images/ListLineClean.png' )}}" class="profilePicture"></img>
    <a href="/" class="menuOption flex items-center justify-center">Dashboard</a>
    @if ($admin)
        <a href={{ route("total_type.index") }} class="menuOption flex items-center justify-center">Editar tabla</a>
        <a href={{ route("program.index") }} class="menuOption flex items-center justify-center">Ver programas</a>
    @endif
    <a href="{{ route("report.index") }}" class="menuOption flex items-center justify-center">Generar reporte</a>
    @if ($admin)
        <a href="{{ url('total/create') }}" class="menuOption flex items-center justify-center">Registrar ventas</a>
        <a href="{{ url('user/index') }}" class="menuOption flex items-center justify-center">Gestionar usuarios</a>
    @endif
    <a href="{{ url('message/create')}}" class="menuOption flex items-center justify-center">Enviar mensaje</a>
    <a href="{{ $user->securityQuestion ? route("security_question.edit", $user->securityQuestion->id) : route("security_question.create")}}" class="menuOption flex items-center justify-center">Pregunta de seguridad</a>
    <a href={{ route("auth.logout") }} class="menuOption flex items-center justify-center">Cerrar sesión</a>
</nav>
