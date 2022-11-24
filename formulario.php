<!DOCTYPE html>
<!--/* Javier Suárez Guzmán 
    Noviembre 2022 */-->
<html>
<head>
<title>Registrar productos / servicios</title>
<meta charset="utf-8">
</head>

<body>
<br><br><br><br>
<?php
include("header.php");
?>
<h2>Ingresar información de publicación :</h2><br>

<div style="margin-inline: 20%;">
<form method="POST" action="registrar.php" enctype="multipart/form-data">
    <p>Nombre de empresa: <input style="float:right; margin-right:15%" type="text" placeholder="Nombre completo" name='nombre'></p>
    <p>Correo electrónico: <input style="float:right; margin-right:15%" type="email" placeholder="Correo electrónico" name='correo'></p><br>

    <p>Imagen de referencia: <input style="float:right; margin-right:15%" type="file" name="file"></p><br>
    <p>Título de la publicación: <input style="float:right; margin-right:15%" type="text" placeholder="Título del producto o servicio a ofrecer" name="ofrecimiento"></p><br>
    
    Descripción: <br><textarea rows="10" cols="69" placeholder="Describa su producto o servicio" name="descripcion"></textarea><br>

    <input type="submit" name="submit" value="Publicar">
</form>
</div>
<br><br><br><br>

<div>
<?php
include("footer.php");
?>
</div>
</body>
</html>