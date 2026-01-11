<x-main-layout>
    <nav class="menu">
        <button class="closeMessageBoxButton color2">X</button>
        <img src="ListLineClean.png" class="profilePicture"></img>
        <button class="menuOption">Mostrar Reporte</button>
        <button class="menuOption">Opción 2</button>
        <button class="menuOption">Opción 3</button>
        <button class="menuOption">Opción 4</button>
        <button class="menuOption">Opción 5</button>
        <button class="menuOption">Cerrar sesión</button>
    </nav>
    <div class="flexRow">
        <div class="main">
            
                    <h1>¡Te damos la bienvenida, Tauro!</h1>
                    <button class="displayMessagesButton noNotificationsImg"></button>
            <div class="center">
                <table class="reportTable">
                    <tr>
                        <td colspan="5" >Seleccionar fecha inicial: <input type="date" name="date" id="date" class="color"></td>
                        <td colspan="4" >Seleccionar fecha final: <input type="date" name="date" id="date" class="color"></td>
                    </tr>
                    <tr>
                        <th>Fecha</th>
                        <th></th>
                        <th>Gato</th>
                        <th>Premier Plus</th>
                        <th>Venta Activa</th>
                        <th>Maxplay</th>
                        <th>Maticlot</th>
                        <th>Parley</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td rowspan="5">12/05/2025</td>
                        <td>Venta</td>
                        <td>100</td>
                        <td>100</td>
                        <td>120</td>
                        <td>100</td>
                        <td>70</td>
                        <td>110</td>
                        <td>700</td>
                    </tr>
                    <tr>
                        <td>Premios</td>
                        <td>100</td>
                        <td>100</td>
                        <td>120</td>
                        <td>100</td>
                        <td>70</td>
                        <td>110</td>
                        <td>700</td>
                    </tr>
                    <tr>
                        <td>Comisión</td>
                        <td>100</td>
                        <td>100</td>
                        <td>120</td>
                        <td>100</td>
                        <td>70</td>
                        <td>110</td>
                        <td>700</td>
                    </tr>
                    <tr>
                        <td>Saldo</td>
                        <td>100</td>
                        <td>100</td>
                        <td>120</td>
                        <td>100</td>
                        <td>70</td>
                        <td>110</td>
                        <td>700</td>
                    </tr>
                    <tr>
                        <td>Ganadores</td>
                        <td>1</td>
                        <td>1</td>
                        <td>2</td>
                        <td>1</td>
                        <td>1</td>
                        <td>2</td>
                        <td>8</td>
                    </tr>

                    <tr>
                        <td class="color">|</td>
                    </tr>

                    <tr>
                        <td colspan="9"><button class="tableButton">Enviar mensaje al administrador</button></td>
                    </tr>
            </table>
            </div>
        </div>
    </div>
</x-main-layout>