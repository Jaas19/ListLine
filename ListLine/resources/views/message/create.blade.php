<x-main-layout>
    <div class="flexRow">
        <div class="main">
            
        @if(session('messageResponse'))
            <div class="notification hidden">
                <div class="notificationHeader"></div>
                <p class="notificationMessage">{{ session('messageResponse') }}</p>
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

            <x-welcome :user="$user"></x-welcome>
            <x-buttons></x-buttons>
            <div class="center">
            <form class="messageForm bg" enctype="multipart/form-data" method="POST" action="{{ route("message.store")}}">
                @csrf
                <select class="bg-white color p-1" name="receiver_id" id="">
                    <option value="" disabled selected>Seleccionar destinatario...</option>
                    @foreach ($users as $receiver)
                        <option value="{{ $receiver->id }}">{{ $receiver->name }}</option>
                    @endforeach
                </select>

                <input type="text" name="header" id="" placeholder="Escribe un título..." class="bg-white formInput fullWidth" maxlength="100" value="{{ old('header') }}">
                
                <textarea name="body" class="bg-white messageContentInput formInput fullWidth" id="" maxlength="2000" placeholder="Clic aquí para escribir un mensaje..." value="{{ old('body') }}"></textarea>
                
                <div class="color2"><input type="file" name="image" id="" class="fileInput">Adjuntar una foto</div>
                
                <button class="sendMessageButton color">Enviar mensaje</button>
            </div>
        </div>
        <x-menu :admin="$admin"></x-menu>
        <x-messages :messages="$messages"></x-messages>
        <x-slot name="script">
            js/validation.js
        </x-slot>
    </div>
</x-main-layout>