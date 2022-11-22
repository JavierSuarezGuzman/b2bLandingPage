<?php

if(isset($_POST["enviar"]) ) {

    if (!empty($_POST["nombre"]) && !empty($_POST["asunto"]) && !empty($_POST["correo"]) && !empty($_POST["mensaje"])){
//me traigo los name del html/index
//$name =  $_POST[""];

    $nombre =  $_POST["nombre"];
    $asunto =  $_POST["asunto"];
    $email =  $_POST["correo"];
    $msj =  $_POST["mensaje"];

    $header =  "From: noreply@example.com"."\r\n";
    $header.=  "Reply-To: noreply@ejemplo.cl"."\r\n";
    $header.=  "X-Mailer: PHP/". phpversion();

    $mail = @mail($email,$asunto,$msj,$header);

        if ($mail) {
            echo "<center><h3>Correo enviado con éxito</h3></center>";
        }
 }
 echo "<br>Correo electrónico: $email <br> Asunto: $asunto <br> Mensaje: $msj";
}







?>