<nav id="messagesBox" class="messageBox hidden">
    <div class="messageBoxHeader color bg2">
        Mensajes
        <div id="closeMessagesButton" class="closeMessageBoxButton color">X</div>
    </div>

    @foreach ($messages as $message)
    <a class="message" href="{{ route('message.index', ['id' => $message->id]) }}">
        <img src="{{ $message->transmissor->photo ? asset('storage/' . $message->transmissor->photo) : asset('images/ListLine.png') }}"
        class="messageProfile">
        {{ $message->header }}
    </a>
    @endforeach

</nav>
