<x-main-layout>
    <div class="flexRow">
        <div class="main">
            <div class="center">
                <div class="bg py-6 px-10 flexCenter rounded-md">

                    <form action="{{ route("security_question.answer", $userToRecover) }}" method="POST" class="flex flex-col gap-5">
                        @csrf
                        @method("POST")
                        <h3 class="color2 font-bold text-2xl">
                            Recuperando contraseña
                        </h3>
                        <div>
                            <label for="answer" class="color2 font-bold m-0 max-h-min">{{ $question }}</label>
                            <input type="text" name="answer" id="answer"
                            class="rounded-sm p-2 block bg-white color outline-none focus:ring-2 focus:ring-red-500" placeholder="Escriba aquí..." value="{{ old("answer") }}">
                        </div>
                        <div>
                            <label for="password" class="color2 font-bold m-0 max-h-min">Nueva contraseña</label>
                            <input type="password" name="password" id="password"
                            class="rounded-sm p-2 block bg-white color outline-none focus:ring-2 focus:ring-red-500" placeholder="Escriba aquí...">
                        </div>
                        <div>
                            <label for="password_confirmation" class="color2 font-bold m-0 max-h-min">Confirmar contraseña</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                            class="rounded-sm p-2 block bg-white color outline-none focus:ring-2 focus:ring-red-500" placeholder="Escriba aquí...">
                        </div>
                        <button type="submit" class="bg-white py-2 color rounded-sm cursor-pointer hover:brightness-90 mt-3 outline-none focus:ring-2 focus:ring-red-500">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</x-main-layout>
