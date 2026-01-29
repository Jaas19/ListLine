<x-main-layout>
    <div class="flexRow">
        <div class="main">
            <x-welcome :user="$user"></x-welcome>
            @if($errors->any())
            <ul class="notification hidden">
                    <div class="notificationHeader"></div>
                @foreach ($errors->all() as $error)
                    <li class="notificationMessage">{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <form action="{{ url('total/store') }}" method="POST" class="center3">
                @csrf
                <table class="reportTable border-separate">
                <tr>
                    <th colspan="{{ count($programs) + 3 }}" >Seleccionar fecha: <input type="date" name="day" id="day" class="bg-white color"></th>
                </tr>
                <!--Table header-->
                <tr>
                    <th>Tipo</th>
                    @foreach ($programs as $program)
                        <th>{{ $program->name }}</th>
                    @endforeach
                    <th>Total</th>
                    <th>Lista</th>
                </tr>

                <!--Iteration for each user-->

                @foreach ($users as $list)
                    @php
                        $firstLoop = true
                    @endphp
                    <!-- Iteration for each tipe of data -->
                    @foreach ($types as $type)
                        <tr>
                            <th>{{ $type->name }}</th>
                            <!-- Iteration for each program -->
                                @foreach ($programs as $program)
                                    <td>
                                        <input type="text" class="tableInput" maxlength="5"
                                        name="total[{{ $list->id }}][{{ $program->id }}][{{ $type->id }}]">
                                    </td>
                                @endforeach
                            <td><input class="tableInput" type="text" maxlength="5"></td>
                            @if ($firstLoop)
                                <th rowspan="{{ count($types) }}">{{ $list->name }}</th>
                                @php
                                    $firstLoop = false
                                @endphp
                            @endif
                        </tr>
                    @endforeach
                    <tr>
                        <th colspan="{{ count($programs) + 3 }}" class="color">|</th>
                    </tr>
                @endforeach
                <tr>
                    <th colspan="{{ count($programs) + 3 }}"><button type="submit" class="tableButton px-2">Enviar</button></th>
                </tr>
            </table>
            </form>
        </div>
        <button id="displayMessagesButton" class="displayMessagesButton noNotificationsImg"
        style="background-image: url('{{ asset('images/no-notifications.png') }}');"></button>

        <button id="displayMenuButton" class="displayMenuButton"
        style="background-image: url('{{ asset('images/menu.png') }}');"></button>
        <x-menu :admin="$admin"></x-menu>
        <x-messages :messages="$messages"></x-messages>
        </div>
    </div>
</x-main-layout>
