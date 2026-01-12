<x-main-layout>
   <x-menu :admin="$admin"></x-menu>
    <x-messages :messages="$messages"></x-messages>
    <div class="flexRow">
        <div class="main">

            <x-welcome :user="$user"></x-welcome>
            <x-buttons></x-buttons>
            <div class="center">
            <div class="bg pd flexCenter">
                <div class="messageBody bg2 color">
                    <div class="messageHeader flexCenter">
                        <img src="{{ asset('storage/' . $message->transmissor->photo) }}" class="messageProfile borderRed"></img>
                        <h2 class="font-bold">{{ $message->transmissor->name }}</h2>
                        <h3 class="font-bold">{{ $message->header }}</h3>
                    </div>

                    <p>{{ $message->body }}</p>
                    @if($message->image)
                        <a href="{{ asset('storage/' . $message->image) }}" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('storage/' . $message->image) }}" class="max-h-36 w-auto hover:opacity-80 transition">
                        </a>
                    @endif
                </div>
                <a class="sendMessageButton color marginTop" href="{{ route('message.create') }}">Responder</a>
            </div>
            </div>
        </div>
        </div>
    </div>
</x-main-layout>
