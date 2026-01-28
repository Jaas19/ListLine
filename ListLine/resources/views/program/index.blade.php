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
                                <th class="p-2 text-2xl" colspan="4">Programas</th>
                            </tr>
                            <tr>
                                <th class="bg sticky left-0 py-2 px-5 text-xl">Nombre</th>
                                <th class="py-2 px-5 text-xl">Estado</th>
                                <th class="py-2 px-5 text-xl" colspan="2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-center font-bold cursor-default">
                            @foreach ($activePrograms as $program)
                                <tr class="border-b-1 border-[#AF1130]">
                                    <td class="sticky left-0 py-2 px-5">{{ $program->name }}</td>
                                    <td class="py-2 px-5">Activo</td>
                                    <td class="p-0 hover:brightness-90"><a href="{{ route("program.edit", $program->id) }}" class="py-2 px-5 cursor-pointer block">Editar</a></td>
                                    <td class="py-2 px-5 cursor-pointer hover:brightness-90">Suspender</td>
                                </tr>
                            @endforeach
                            @foreach ($inactivePrograms as $program)
                                <tr>
                                    <td class="py-2 px-5">{{ $program->name }}</td>
                                    <td class="py-2 px-5">Suspendido</td>
                                    <td class="p-0 hover:brightness-90"><a href="{{ route("program.edit", $program->id) }}" class="py-2 px-5 cursor-pointer block">Editar</a></td>
                                    <td class="py-2 px-5 cursor-pointer hover:brightness-90">Habilitar</td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td class="hover:brightness-90 p-0" colspan="4">
                                        <a href={{ route("program.create") }} class="py-2 px-5 cursor-pointer block">Registrar nuevo programa</a>
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
