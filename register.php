<?php

function register($conect){
  

 if ($conect){
     echo "todo correcto";
 }
if (isset($_POST["btn"])){
    if (strlen($_POST["nombre"])>=1 && strlen($_POST["points"])>=0  ){
        $name=trim($_POST["nombre"]);
        $points=trim($_POST["points"]);
        echo "hola";
        $consulta="INSERT INTO highest( `points`, `nombre`) VALUES ('$points','$name')";
        $result=mysqli_query($conect,$consulta);
        if ($result){
            ?>
            <h3>Su puntuación y su nombre han sido correctamente ingresados</h3>
            <?php
        }
        else{
            ?>
            <h3>Ha habido un problema</h3>
            <?php
         }
        
         
    }
    else{
        ?>
        <h3>Rellene todos los campos</h3>
        <?php
     }
}
}

?>
