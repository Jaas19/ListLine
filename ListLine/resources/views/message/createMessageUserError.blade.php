<x-main-layout>
    <div class="flexRow">
        <div class="main">
            <div class="notification">
                <button class="notificationButtonClose">X</button>
                <p class="notificationHeader">Notificación</p>
                <p class="notificationMessage">Error: Escriba un título.</p>
                <p class="notificationMessage">Error: Escriba un mensaje o adjunte una foto.</p>
            </div>
            
            <h1>¡Te damos la bienvenida, Tauro!</h1>
            <button class="displayMenuButton"></button>
            <button class="displayMessagesButton noNotificationsImg"></button>
            <div class="center">
            <div class="messageForm bg">
                <input type="text" name="" id="" placeholder="Escribe un título..." class="formInput fullWidth" maxlength="100">
                <textarea name="" class="messageContentInput formInput fullWidth" id="" maxlength="2000" placeholder="Clic aquí para escribir un mensaje..."></textarea>
                <div class="color2"><input type="file" name="" id="" class="fileInput">Adjuntar una foto</div>
                <button class="sendMessageButton color">Enviar mensaje</button>
            </div>
            </div>
        </div>
    </div>
</x-main-layout>