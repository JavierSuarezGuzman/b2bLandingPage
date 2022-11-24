<!--resultados de la busqueda-->
<!DOCTYPE html>
<!--/* Javier Suárez Guzmán 
    Noviembre 2022 */-->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<br><br><br>
<?php

include("header.php");

try {
    $include = include("con_bd.php");
    $search = trim($_GET["busqueda"]);
    if($include) {
        $consulta = "SELECT * FROM `b2b` WHERE `offer` LIKE '%$search%' OR `descr` LIKE '%$search%' ORDER BY `id` DESC";
        $resultado = mysqli_query($conexion,$consulta);
        if($resultado){
            while($row = $resultado->fetch_array()){
                //$local - ['bbdd']
                $id = $row['id'];
                $dateadd = $row['dateadd'];
                $name = $row['name'];
                $email = $row['email'];
                $offer = $row['offer'];
                $imageURL = 'uploads/'.$row["file_name"];
                $score = $row['score'];
                $descr = $row['descr'];
    
                ?>

                <div class="tarjeta">
                    <div class="grid-tarjeta">

                        <div>
                          <img width="210px" src="<?php echo $imageURL; ?>" />  
                        </div>

                        <div class="tarjeta-texto">
                            <h3> <?php echo "$offer";?> </h3>
                            Añadido: <?php echo "$dateadd";?><br>
                            <b>Por: </b> <?php echo "$name | $email";?>
                            <br><br>Descripción: <?php echo "$descr";?>
                        </div>

                    </div> 
                </div>
            <?php
    
            }

        }else{
            ?>
            <br><br><br><br><h1>No existen resultados para su búsqueda</h1>
            <?php
        }
    }

} catch (\Throwable $th) {
    echo '<h1 style="color: red"> Problema al conectarse a la base de datos - Revise el estado de la misma</h1>';
}



include("footer.php");




?>


</body>
</html>