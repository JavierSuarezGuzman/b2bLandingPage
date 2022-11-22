<!DOCTYPE html>
<html>
<head>
<title>Registrar productos / servicios</title>
<meta charset="utf-8">
</head>

<body>
<?php
include("header.php");?>
<form method="POST"> <br>
<h2>Ingresar información :</h2>
<input type="text" placeholder="Nombre completo" name='nombre'><br>
<input type="email" placeholder="Correo electrónico" name='correo'><br><br>

<input type="text" placeholder="Título del producto o servicio a ofrecer" name="ofrecimiento"><br><br>
<textarea placeholder="Describa su producto o servicio" name="descripcion"></textarea><br>

<input type="submit" name="registrar" >

<?php 
include("registrar.php");
?>
<div>
<?php
include("footer.php");
?>
</div>
</body>
</html>