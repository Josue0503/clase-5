<?php
//Dado como dato el sueldo de un trabajador, aplique un aumento del 15% si su sueldo es mayor o igual a $550.
//Imprimir en ese caso el nuevo sueldo del trabajador.
$aumento = 0;
$sueldo = 0;
$nombre = "";
if (isset($_POST['calcular'])){
    $nombre = $_POST['nombre'];
    $sueldo = $_POST['sueldo'];
    if ($sueldo>=550) {
        $aumento = $sueldo*0.15;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Ejercicio 1</title>
</head>

<body>
    <header class="container">
        <h2>
            Aumento de salario
        </h2>
    </header>
    <main class="container">
        <form action="ejercicio1.php" method="POST">
            <fieldset class="row g-3">
                <legend>Nombre</legend>

                <div class="col-md-4">
                    <label for="nota1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Juan Manuel">
                </div>

            </fieldset>
            <fieldset class="row g-3">
                <legend>Sueldo</legend>

                <div class="col-md-4">
                    <label for="nota1" class="form-label">Ingrese salario</label>
                    <input type="text" class="form-control" name="sueldo" id="sueldo" placeholder="$0.00">

            </fieldset>


            <div class="col-12 my-2">
                <button type="submit" name="calcular" class="btn btn-success">Procesar</button>

                <div class="alert alert-primary" role="alert">
                    <?php echo "El sueldo de: ".$nombre." es de: ". number_format( $sueldo+$aumento) ?> <br>
                 
                </div>
            </div>
        </form>
    </main>
</body>

</html>