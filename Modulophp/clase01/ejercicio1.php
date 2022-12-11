<?php
//escribir un programa que pregunte al usuario su nombre, apellido, dui, edad, telefono y dirección, y que lo muestre en pantalla
$nombre = "Jasson Josué";
$apellido = "Alfaro Ramírez";
$dui = "1234567-8";
$edad = 17;
$telefono = "2334-2334";
$direccion = "Barrio al cielo. (Soyapango)";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>ejercicio 1</title>
</head>
<body>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nombre completo</th>
                <th>Dui</th>
                <th>edad</th>
                <th>telefono</th>
                <th>dirección</th>
</tr>
        </thead>
        <tbody>
<tr>
    <td><?php echo $nombre. " ". $apellido ?> </td>
    <td><?php echo $dui ?> </td>
    <td><?php echo $edad?> </td>
    <td><?php echo $telefono ?> </td>
    <td><?php echo $direccion ?> </td>
</tr>
        </tbody>
    </table>
</body>
</html>