<x-main-layout>
   <x-menu :admin="$admin"></x-menu>
    <x-messages :messages="$messages"></x-messages>
    <div class="flexRow">
        <div class="main">
            <x-welcome :user="$user"></x-welcome>
            <x-buttons></x-buttons>
            <div class="center">
                <div class="w-full sm:w-auto overflow-auto">
                    <table class="bg rounded-md overflow-auto">
                        <thead class="color2 cursor-default">
                            <tr>
                                <th class="p-2 text-2xl" colspan="5">Usuarios</th>
                            </tr>
                            <tr>
                                <th class="bg sticky left-0 py-2 px-5 text-xl">Nombre</th>
                                <th class="py-2 px-5 text-xl">Estado</th>
                                <th class="py-2 px-5 text-xl" colspan="1">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-center font-bold cursor-default">
                            @foreach ($activeUsers as $user)
                                <tr class="border-b-1 border-[#AF1130]">
                                    <td class="sticky left-0 z-10 py-2 px-5">{{ $user->name }}</td>
                                    <td data-id="{{ $user->id }}" class="status-field py-2 px-5 text-green-500">Activo</td>
                                    <td class="toggle-status-button py-2 px-5 cursor-pointer hover:brightness-90" data-status="0" data-id="{{ $user->id }}">Suspender</td>
                                </tr>
                            @endforeach
                            @foreach ($inactiveUsers as $user)
                                <tr class="border-b-1 border-[#AF1130]">
                                    <td class="sticky left-0 z-10 py-2 px-5">{{ $user->name }}</td>
                                    <td data-id="{{ $user->id }}" class="status-field py-2 px-5">Suspendido</td>
                                    <td class="toggle-status-button py-2 px-5 cursor-pointer hover:brightness-90" data-status="1" data-id="{{ $user->id }}">Habilitar</td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td class="hover:brightness-90 p-0" colspan="5">
                                        <a href={{ route("user.create") }} class="py-2 px-5 cursor-pointer block">Registrar nuevo usuario</a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
    <x-slot name="script">
        js/user.js
    </x-slot>
</x-main-layout>
