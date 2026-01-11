<x-main-layout>
    <div class="center">
        
        <form class="grid pannel center" action="{{ route("user.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
                <ul class="notification">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <img src="{{ asset( "images/ListLine.png" ) }}" alt="Logo" class="logo">
            <input class="formInput" type="text" name="name" id="name" placeholder="Nombre" required>
            <input class="formInput" type="mail" name="email" id="user" placeholder="Correo" required>
            <input class="formInput" type="password" name="password" id="password" placeholder="Contraseña" required>
            <label for="photo">Foto de Perfil</label>
            <input class="fileInput" type="file" name="photo" id="photo" required>
            <button class="button">Registrar</button>
        </form>
    </div>
    <script src="./js/validation.js"></script>
</x-main-layout>