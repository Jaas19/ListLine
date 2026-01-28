<x-main-layout>
    <div class="flexRow">
        <div class="main">
            <x-welcome :user="$user"></x-welcome>
            <button id="displayMessagesButton" class="displayMessagesButton noNotificationsImg" style="background-image: url('{{ asset('images/no-notifications.png') }}');"></button>
            <button id="displayMenuButton" class="displayMenuButton" style="background-image: url('{{ asset('images/menu.png') }}');"></button>
        </div>
        <x-menu :admin="$admin"></x-menu>
        <x-messages :messages="$messages"></x-messages>
    </div>
</x-main-layout>
