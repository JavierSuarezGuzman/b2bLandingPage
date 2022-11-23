<?php

include("con_bd.php");



if(isset($_POST["registrar"])) {

    if (strlen($_POST["nombre"]) > 1 && 
    strlen($_POST["correo"]) > 4 && 
    strlen($_POST["ofrecimiento"]) > 1) {

        //me traigo los name del index
        $name = trim($_POST["nombre"]);
        $email = trim($_POST["correo"]);
        $dateadd = date("d/m/y");
        $offer = trim($_POST["ofrecimiento"]);
        //https://www.codexworld.com/upload-store-image-file-in-database-using-php-mysql/
        //$image = 
        $descr = trim($_POST["descripcion"]);
        //$score = trim($_POST["valoracion"]);

        $consulta = "INSERT INTO `b2b`( `name`, `dateadd`, `email`, `offer`, `descr`) VALUES ( '$name','$dateadd', '$email','$offer','$descr' )";

        $resultado = mysqli_query($conexion, $consulta);

        if($resultado) {
            echo "<h4> ¡Has inscrito tu producto o servicio correctamente!</h4>";
        }else {
            echo "Ha ocurrido un error";
        }
    }else {
        echo "<h3>DEBES COMPLETAR TODOS LOS CAMPOS, EL NOMBRE DEBE TENER AL MENOS 2 LETRAS Y EL CORREO DEBE SER VÁLIDO</h3>";
    }

}

/*if($conexion){
    //
}*/




?>