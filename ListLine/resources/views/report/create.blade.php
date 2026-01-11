<x-main-layout>
    <div class="flexRow">
        <x-menu :admin="$admin"></x-menu>
        <x-messages :messages="$messages"></x-messages>
        <div class="main">
                    <h1 class="text-4xl">¡Te damos la bienvenida, Admin!</h1>
                    <button class="displayMenuButton"></button>
                    <button class="displayMessagesButton notificationsImg"></button>
            <div class="center3">
                <table class="reportTable border-separate">
                <tr>
                    <th colspan="9" >Seleccionar fecha: <input type="date" name="date" id="date" class="bg-white color"></th>
                </tr>
                <tr>
                    <th>Tipo</th>
                    <th>Gato</th>
                    <th>Premier Plus</th>
                    <th>Venta Activa</th>
                    <th>Maxplay</th>
                    <th>Maticlot</th>
                    <th>Parley</th>
                    <th>Total</th>
                    <th>Lista</th>
                </tr>


                <tr>
                    <th>Venta</th>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <th rowspan="5">La Victoria</th>
                </tr>

                <tr>
                    <th>Premios</th>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                </tr>

                <tr>
                    <th>Comisión</th>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                </tr>

                <tr>
                    <th>Saldo</th>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                </tr>

                <tr>
                    <th>Ganadores</th>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                </tr>

                <tr>
                    <th class="color">|</th>
                </tr>

                <tr>
                    <th>Venta</th>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <th rowspan="5">Tauro</th>
                </tr>

                <tr>
                    <th>Premios</th>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                </tr>

                <tr>
                    <th>Comisión</th>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                </tr>

                <tr>
                    <th>Saldo</th>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                </tr>

                <tr>
                    <th>Ganadores</th>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                    <td><input class="tableInput" type="text" maxlength="5"></td>
                </tr>

                <tr>
                    <th colspan="9"><button class="tableButton px-2">Enviar</button></th>
                </tr>

            </table>
            </div>
        </div>
    </div>
</x-main-layout>