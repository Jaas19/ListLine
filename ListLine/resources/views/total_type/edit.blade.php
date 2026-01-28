<x-main-layout>
   <x-menu :admin="$admin"></x-menu>
    <x-messages :messages="$messages"></x-messages>
    <div class="flexRow">
        <div class="main">
            <x-welcome :user="$user"></x-welcome>
            <x-buttons></x-buttons>
            <div class="center">
                <div class="bg py-6 px-10 flexCenter rounded-md">

                    <form action="{{ route("total_type.update", $totalType->id) }}" method="POST" class="flex flex-col gap-5">
                        @csrf
                        @method("PATCH")
                        <h3 class="color2 font-bold text-2xl">
                            Editando tipo de dato
                        </h3>
                        <div>
                            <label for="name" class="color2 font-bold m-0 max-h-min">Nombre del dato</label>
                            <input type="text" name="name" id="name" placeholder="Introducir nombre..."
                            class="rounded-sm p-2 block bg-white color outline-none focus:ring-2 focus:ring-red-500"
                            value="{{ old("name", $totalType->name) }}">
                        </div>
                        <div>
                            <label for="description" class="color2 font-bold m-0 max-h-min">Descripción</label>
                            <textarea name="description" id="description"
                            class="rounded-sm p-2 block bg-white color outline-none focus:ring-2 focus:ring-red-500" placeholder="Escriba aquí...">{{ old("description", $totalType->description) }}</textarea>
                        </div>
                        <div>
                            <label for="status" class="color2 font-bold m-0 max-h-min">Estado</label>
                            <select name="status" id="status" class="rounded-sm py-2 color2 block bg-white text-[#AF1130] px-2 outline-none focus:ring-2 focus:ring-red-500">
                                <option value="" disabled>Seleccione</option>
                                <option value="1" {{ old('status', $totalType->status) === 1 ? 'selected' : '' }}>Activo</option>
                                <option value="0" {{ old('status', $totalType->status) === 0 ? 'selected' : '' }}>Inactivo</option>
                            </select>
                        </div>
                        <button type="submit" class="bg-white py-2 color rounded-sm cursor-pointer hover:brightness-90 mt-3 outline-none focus:ring-2 focus:ring-red-500">Actualizar dato</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</x-main-layout>
