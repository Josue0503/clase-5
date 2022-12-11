<?php
// /*estructura for */

// for ($i=0; $i < 100; $i++) { 
//     echo $i . ','; 
// }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form action="for.php" method="POST">
        <label for="">Cuantos empleados</label>
        <input type="number" name="cantidad" value="1">
        <button type="submit" name="procesar"> Procesar</button>
    </form>
    <?php 
    if (isset($_POST['procesar'])){
        $cantidadEmpleados = $_POST['cantidad'];
        for ($i=0; $i < $cantidadEmpleados; $i++) { 
      
    ?>
    <h2>Ingrese la informaciòn del empleado <?php echo $i+1 ?></h2>
    <form action="for.php">
        <label for="">Sueldo</label>
        <input type="text">
    </form>
    <?php  }
    }  ?>

    </body>
</html>