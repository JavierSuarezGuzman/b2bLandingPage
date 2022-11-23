<?php

?><br><br><br><br><?php

//PENDIENTE1: Achicar las imagenes

//PENDIENTE2: Buscador
        //$search = trim($_GET["busqueda"]);

        //$consulta = "SELECT * FROM `b2b` WHERE `offer`AND`descr` LIKE `$search` ORDER BY `id` DESC";


try {
    $include = include("con_bd.php");

    if($include) {
        $consulta = "SELECT * FROM `b2b` ORDER BY `id` DESC";
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
                    <div class="tarjeta-item">
                    
                    <img src="<?php echo $imageURL; ?>" />
                        
                    </div>
                    <div class="tarjeta-item">
                    <h3> <?php echo "$offer ";?> </h3>
                    Añadido: <?php echo "$dateadd";?><br>
                    <b>Por: </b> <?php echo "$name $email";?><br>
                    Descripción: <?php echo "$descr";?>
                    </div>
            </div> 

            </div><?php
    
    
            }
        }else{
            echo "<h1>NO EXISTEN DATOS EN LA BBDD</h1>";
    
        }
    }

} catch (\Throwable $th) {
    echo '<h1 style="color: red"> Problema al conectarse a la base de datos - Revise el estado de la misma</h1>';
}








?>