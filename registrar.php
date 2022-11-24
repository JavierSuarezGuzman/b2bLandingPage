<?php
/* Javier Suárez Guzmán 
    Noviembre 2022 */

include("con_bd.php");
include("header.php");

try {
    
    if(isset($_POST["submit"])) {

        //me traigo los name del index
        $name = trim($_POST["nombre"]);
        $email = trim($_POST["correo"]);
        $dateadd = date("d/m/y");
        $offer = trim($_POST["ofrecimiento"]);
      
        //https://www.codexworld.com/upload-store-image-file-in-database-using-php-mysql/
        // File upload path
        $targetDir = "uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
      
        $descr = trim($_POST["descripcion"]);
        //$score = trim($_POST["valoracion"]);
      
        
          if (strlen($_POST["nombre"]) > 1 && 
          strlen($_POST["correo"]) > 4 && 
          strlen($_POST["ofrecimiento"]) > 1) {
      
              if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
      
              $consulta = "INSERT INTO `b2b`( `name`, `dateadd`, `email`, `offer`, `file_name`, `descr`) VALUES ( '$name','$dateadd', '$email','$offer','".$fileName."','$descr' )";
              $resultado = mysqli_query($conexion, $consulta);

          }else{

            $consulta = "INSERT INTO `b2b`( `name`, `dateadd`, `email`, `offer`, `file_name`, `descr`) VALUES ( '$name','$dateadd', '$email','$offer','../assets/th.png','$descr' )";
            $resultado = mysqli_query($conexion, $consulta);

          }
              if($resultado) {
                  include("header.php");
                  echo "<br><br><br><br><br><h4> ¡Has inscrito tu producto o servicio correctamente!</h4>";
                  include("footer.php");
              }else {
                  include("header.php");
                  echo "<br><br><br><br><br><h3 style='color:red'>Ha ocurrido un error. Vualva a intentarlo</h3>";
                  include("footer.php");
              }
          }else {
              echo "<br><br><br><br><br>DEBES COMPLETAR TODOS LOS CAMPOS, EL NOMBRE DEBE TENER AL MENOS 2 LETRAS Y EL CORREO DEBE SER VÁLIDO";
              include("formulario.php");
          }
      
      }

      
} catch (\Throwable $th) {
    echo '<br><br><br><br><br><h1 style="color: red"> Problema al conectarse a la base de datos - Revise el estado de la misma</h1>';
}

include("footer.php");


?>