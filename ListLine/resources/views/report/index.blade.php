<x-main-layout>
   <x-menu :admin="$admin"></x-menu>
    <x-messages :messages="$messages"></x-messages>
    <div class="flexRow">
        <div class="main">
            <x-welcome :user="$user"></x-welcome>
            <x-buttons></x-buttons>
            <div class="center">
                <div class="bg py-6 px-10 flexCenter rounded-md">

                    <form action="{{ route("report.pdf") }}" method="POST" target="_blank" class="flex flex-col gap-5">
                        @csrf
                        <h3 class="color2 font-bold text-2xl">
                            Generando reporte
                        </h3>
                        <div id="period-select-div">
                            <label for="period" class="color2 font-bold m-0 max-h-min">Período</label>
                            <select name="period" id="period-select" class="rounded-sm p-2 color2 block bg-white text-[#AF1130] outline-none focus:ring-2 focus:ring-red-500">
                                <option value="" disabled selected>Seleccione...</option>
                                <option value="daily">Diario</option>
                                <option value="weekly">Semanal</option>
                                <option value="monthly">Mensual</option>
                                <option value="annually">Anual</option>
                                <option value="general">General</option>
                                <option value="custom">Personalizado</option>
                            </select>
                        </div>
                        @if ($admin)
                            <div>
                                <h3 class="color2 font-bold">Listas</h3>
                                @foreach ($users as $user)
                                    <div>
                                        <input type="checkbox" value="{{ $user->id }}" name="users[]" id="user_{{ $user->id }}" checked>
                                        <label for="user_{{ $user->id }}" class="color2 font-bold">{{ $user->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <div>

                        </div>
                        <button type="submit" class="bg-white py-2 color rounded-sm cursor-pointer hover:brightness-90 outline-none focus:ring-2 focus:ring-red-500">Generar reporte</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    <x-slot name="script">
        /js/report.js
    </x-slot>
</x-main-layout>
