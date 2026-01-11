<x-main-layout>
    <div class="center">
        <form method="POST" action="" class="grid pannel center">
            @csrf
            @if(session('registerResponse'))
                <div class="notification hidden">
                    <p class="notificationMessage">Registro exitoso.</p>
                </div>
            @endif
            @if($errors->any())
            <ul class="notification hidden">
                    <div class="notificationHeader"></div>
                @foreach ($errors->all() as $error)
                    <li class="notificationMessage">{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <img src="{{ asset("images/ListLine.png") }}" alt="Logo" class="logo">
            <input class="formInput" type="mail" name="email" id="email" placeholder="Correo">
            <input class="formInput" type="password" name="password" id="password" placeholder="Contraseña">
            <button class="button">Iniciar Sesión</button>
        </form>
    </div>
    <script src="./js/validation.js"></script>
</x-main-layout>

