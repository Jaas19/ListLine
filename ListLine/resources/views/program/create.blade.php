<x-main-layout>
   <x-menu :admin="$admin"></x-menu>
    <x-messages :messages="$messages"></x-messages>
    <div class="flexRow">
        <div class="main">
            <x-welcome :user="$user"></x-welcome>
            <x-buttons></x-buttons>
            <div class="center">
                <div class="bg py-6 px-10 flexCenter rounded-md">

                    <form action="{{ route("program.store") }}" method="POST" class="flex flex-col gap-5">
                        @csrf
                        <h3 class="color2 font-bold text-2xl">
                            Registrando programa
                        </h3>
                        <div>
                            <label for="name" class="color2 font-bold m-0 max-h-min">Nombre del programa</label>
                            <input type="text" name="name" id="name" placeholder="Introducir nombre..."
                            class="rounded-sm p-2 block bg-white color outline-none focus:ring-2 focus:ring-red-500"
                            value="{{ old("name") }}"
                            required>
                        </div>
                        <div>
                            <label for="commission" class="color2 font-bold">Comisión</label>
                            <input type="text" step="1" inputmode="decimal" name="commission" id="commission" placeholder="Introduzca la comisión..."
                            class="rounded-sm py-2 color2 block bg-white text-[#AF1130] px-2 outline-none focus:ring-2 focus:ring-red-500 percentage-input"
                            value="{{ old("commission") }}">
                        </div>
                        <div>
                            <label for="status" class="color2 font-bold m-0 max-h-min">Estado</label>
                            <select name="status" id="status" required
                            class="rounded-sm py-2 color2 block bg-white text-[#AF1130] px-2 outline-none focus:ring-2 focus:ring-red-500">
                                <option value="" disabled {{ is_null(old('status')) ? 'selected' : '' }}>Seleccione</option>
                                <option value="1" {{ old('status') === 1 ? 'selected' : '' }}>Activo</option>
                                <option value="0" {{ old('status') === 0 ? 'selected' : '' }}>Inactivo</option>
                            </select>
                        </div>
                        <button type="submit" class="bg-white py-2 color rounded-sm cursor-pointer hover:brightness-90 mt-3 outline-none focus:ring-2 focus:ring-red-500">Registrar programa</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
    <x-slot name="script">
        js/percentage.js
    </x-slot>
</x-main-layout>
