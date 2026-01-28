<x-main-layout>
   <x-menu :admin="$admin"></x-menu>
    <x-messages :messages="$messages"></x-messages>
    <div class="flexRow">
        <div class="main">
            <x-welcome :user="$user"></x-welcome>
            <x-buttons></x-buttons>
            <div class="center">
                <div class="bg pd flexCenter">

                </div>
            </div>
        </div>
        </div>
    </div>
</x-main-layout>
