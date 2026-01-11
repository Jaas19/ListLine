<x-main-layout>
    <div class="flexRow">
        <div class="main">
            
                    <h1>¡Te damos la bienvenida, Admin!</h1>
                    <button class="displayMenuButton"></button>
                    <button class="displayMessagesButton noNotificationsImg"></button>
            <div class="center">
                <div class="notification">
                    <button class="notificationButtonClose">X</button>
                    <p class="notificationHeader">Notificación</p>
                    <p class="notificationMessage">Error: Fecha inválida.</p>
                    <p class="notificationMessage">Error: No existen reportes para esa fecha.</p>
                </div>
                <table class="reportTable">
                    <tr>
                        <td colspan="4" >Seleccionar fecha inicial: <input type="date" name="date" id="date" class="color"></td>
                        <td colspan="5" rowspan="2">Seleccionar lista: 
                            <select name="" id="" class="noBorder color bg2">
                            <option value="">Tauro</option>
                            <option value="">La Victoria</option>
                            <option value="">Todas</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
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
                        <td colspan="9"><button class="tableButton">Enviar mensaje a la lista</button></td>
                    </tr>
            </table>
            </div>
        </div>
    </div>
</x-main-layout>