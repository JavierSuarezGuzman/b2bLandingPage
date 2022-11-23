<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>

<nav class="header">

<!--
  <span><a href="index.php"><img height="56px" src="assets/Morganalogoblue.png"></a></span>

  <form action="resultados.php" method="GET">
      <input type="text" name="busqueda"></input> <input type="submit" value="🔎"></input><br>
  </form>

  <a  href="formulario.php">VENDER</a>
  <a  href="#">Ingresar</a>
  <a  href="#">Acerca de y contacto</a>
-->


  <ul class="center">
    <li> <a href="index.php"><img height="56px" src="assets/Morganalogoblue.png"></a> </li>


      <form class="searchbar" action="resultados.php" method="GET">
        <input class="searchinput" type="text" name="busqueda" placeholder="Buscar productos, servicios o proveedores"></input>
        <input class="searchbutton" type="submit" value="🔎"></input>
      </form>


    <li style="float:right">
      <a class="a2" href="#">Acerca de y contacto</a>
    </li>
    <li style="float:right">
    <a class="a2" href="formulario.php">VENDER</a>
    </li>
    <li style="float:right">
    <a class="a2" href="#">Ingresar</a>
    </li>
  </ul>

</nav>
    
</body>
</html>