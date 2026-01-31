<x-main-layout>
    <div class="flexRow">
        <div class="main">
            <div class="center">
                <div class="bg py-6 px-10 flexCenter rounded-md">

                    <form action="{{ route("security_question.verifyRecovery") }}" method="POST" class="flex flex-col gap-5">
                        @csrf
                        <h3 class="color2 font-bold text-2xl">
                            Recuperando contraseña
                        </h3>
                        <div>
                            <label for="email" class="color2 font-bold m-0 max-h-min">Correo</label>
                            <input type="text" name="email" id="email"
                            class="rounded-sm p-2 block bg-white color outline-none focus:ring-2 focus:ring-red-500" placeholder="Introduzca su correo...">
                        </div>
                        <button type="submit" class="bg-white py-2 color rounded-sm cursor-pointer hover:brightness-90 mt-3 outline-none focus:ring-2 focus:ring-red-500">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</x-main-layout>
