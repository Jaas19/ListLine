<x-main-layout>
    <div class="flexRow">
        <div class="main">
            <div class="center">
                <div class="bg py-6 px-10 flexCenter rounded-md">

                    <form action="{{ route("security_question.store") }}" method="POST" class="flex flex-col gap-5">
                        @csrf
                        <h3 class="color2 font-bold text-2xl">
                            Registrando pregunta de seguridad
                        </h3>
                        <div>
                            <label for="question" class="color2 font-bold m-0 max-h-min">Pregunta</label>
                            <textarea type="text" name="question" id="question"
                            class="rounded-sm p-2 block bg-white color outline-none focus:ring-2 focus:ring-red-500" placeholder="Escriba aquí...">{{ old("question") }}</textarea>
                        </div>
                        <div>
                            <label for="answer" class="color2 font-bold m-0 max-h-min">Respuesta</label>
                            <input name="answer" id="answer"
                            class="rounded-sm p-2 block bg-white color outline-none focus:ring-2 focus:ring-red-500" placeholder="Escriba aquí..." value="{{ old("answer") }}">
                        </div>
                        <button type="submit" class="bg-white py-2 color rounded-sm cursor-pointer hover:brightness-90 mt-3 outline-none focus:ring-2 focus:ring-red-500">Registrar pregunta</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</x-main-layout>
