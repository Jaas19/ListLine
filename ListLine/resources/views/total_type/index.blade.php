<x-main-layout>
   <x-menu :admin="$admin"></x-menu>
    <x-messages :messages="$messages"></x-messages>
    <div class="flexRow">
        <div class="main">
            <x-welcome :user="$user"></x-welcome>
            <x-buttons></x-buttons>
            <div class="center">
                <div class="w-full sm:w-auto overflow-auto">
                    <table class="bg rounded-md w-full sm:w-auto">
                        <thead class="color2 cursor-default">
                            <tr>
                                <th class="p-2 text-2xl " colspan="5">Tipos de datos</th>
                            </tr>
                            <tr>
                                <th class="sticky left-0 z-10 py-4 px-5 text-xl bg">Nombre</th>
                                <th class="py-4 px-5 text-xl">Descripción</th>
                                <th class="py-4 px-5 text-xl">Estado</th>
                                <th class="py-4 px-5 text-xl" colspan="2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-center font-bold cursor-default">
                            @foreach ($activeTotalTypes as $totalType)
                                <tr class="border-b-1 border-[#AF1130]">
                                    <td class="sticky left-0 z-10 py-2 px-5">{{ $totalType->name }}</td>
                                    <td class="font-normal py-2 px-5 max-w-3xs truncate {{ $totalType->description ? 'cursor-help underline' : 'cursor-default' }}" title="{{ $totalType->description }}">{{ $totalType->description ?: '-' }}</td>
                                    <td class="py-2 px-5">Activo</td>
                                    <td class="p-0 hover:brightness-90"><a href="{{ route("total_type.edit", $totalType->id) }}" class="py-2 px-5 cursor-pointer block">Editar</a></td>
                                    <td class="py-2 px-5 cursor-pointer hover:brightness-90">Suspender</td>
                                </tr>
                            @endforeach
                            @foreach ($inactiveTotalTypes as $totalType)
                                <tr>
                                    <td class="py-2 px-5">{{ $totalType->name }}</td>
                                    <td class="font-normal py-2 px-5 max-w-3xs truncate underline cursor-help" title="{{ $totalType->description }}">{{ $totalType->description }}</td>
                                    <td class="py-2 px-5">Suspendido</td>
                                    <td class="p-0 hover:brightness-90"><a href="{{ route("total_type.edit", $totalType->id) }}" class="py-2 px-5 cursor-pointer block">Editar</a></td>
                                    <td class="py-2 px-5 cursor-pointer hover:brightness-90">Habilitar</td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td class="hover:brightness-90 p-0" colspan="5">
                                        <a href={{ route("total_type.create") }} class="py-2 px-5 cursor-pointer block">Registrar nuevo tipo de dato</a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        </div>
    </div>
</x-main-layout>
