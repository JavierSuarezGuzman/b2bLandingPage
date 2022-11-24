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
    <p>Nombre de empresa: <input class="input-form" type="text" placeholder="Nombre completo" name='nombre'></p><br>
    <p>Correo electrónico: <input class="input-form" type="email" placeholder="Correo electrónico" name='correo'></p><br>

    <p>Imagen de referencia: <input class="input-form" type="file" name="file" accept=".jpg,.png,.jpeg,.gif"></p><br>
    <p>Título de la publicación: <input class="input-form" type="text" placeholder="Título del producto o servicio a ofrecer" name="ofrecimiento"></p><br><br>
    
    Descripción: <br><textarea rows="10" cols="69" placeholder="Describa su producto o servicio" name="descripcion"></textarea>
    <br><br>
    <input class="button-form" type="submit" name="submit" value="Publicar">
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