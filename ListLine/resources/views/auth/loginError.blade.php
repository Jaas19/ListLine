<x-main-layout>
    <div class="center">
        
        <div class="notification">
            <button class="notificationButtonClose">X</button>
            <p class="notificationHeader">Notificación</p>
            <p class="notificationMessage">Error: El usuario no existe.</p>
            <p class="notificationMessage">Error: Contraseña incorrecta.</p>
        </div>

        <div class="grid pannel center">
            <img src="{{ asset("ListLine.png") }}" alt="Logo" class="logo">
            <input class="formInput" type="text" name="user" id="user" placeholder="Usuario">
            <input class="formInput" type="password" name="password" id="password" placeholder="Contraseña">
            <button class="button">Iniciar Sesión</button>
        </div>
    </div>
</x-main-layout>