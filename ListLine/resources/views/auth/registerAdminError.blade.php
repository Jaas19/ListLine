<x-main-layout>
    <div class="center">
        
        <div class="notification">
            <button class="notificationButtonClose">X</button>
            <p class="notificationHeader">Notificación</p>
            <p class="notificationMessage">Error: Nombre inválido, solo se admiten letras.</p>
            <p class="notificationMessage">Error: Usuario inválido, solo se admiten letras y números.</p>
            <p class="notificationMessage">Error: Contraseña inválida, solo se admiten letras, números y símbolos comunes (@*.-$,#!&/¿¡?=+).</p>
            <p class="notificationMessage">Error: Contraseña muy corta.</p>
        </div>

        <div class="grid pannel center">
            <img src="ListLine.png" alt="Logo" class="logo">
            <input class="formInput" type="text" name="name" id="name" placeholder="Nombre">
            <input class="formInput" type="text" name="user" id="user" placeholder="Usuario">
            <input class="formInput" type="password" name="password" id="password" placeholder="Contraseña">
            <label for="photo">Foto de Perfil</label>
            <input class="fileInput" type="file" name="photo" id="photo">
            <button class="button">Registrarse</button>
        </div>
    </div>
</x-main-layout>