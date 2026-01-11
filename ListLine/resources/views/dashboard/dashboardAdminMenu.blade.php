<x-main-layout>
    <div class="flexRow">
        <div class="main">
            <h1>¡Te damos la bienvenida, Admin!</h1>            
            <button class="displayMessagesButton notificationsImg"></button>
        </div>
        <x-menu :admin="$admin"></x-menu>
        <x-messages></x-messages>
    </div>
</x-main-layout>