<?php
// Un obrero necesita calcular su salario semanal, el cual se obtiene de la siguiente manera:
// Si trabaja 40 horas o menos se le paga $4 por hora.
// Si trabaja más de 40 horas se le paga $4 por cada una de las primeras 40 horas y $6 por cada hora extra.
// Calcule el nuevo salario del obrero.
$nombre = "";
$apellido = "";
$cantidadHoras = 0;
$precioNormal = 0.00;
$precioExtra = 0.0;
//proceso del ejercicio
$pagoNormal = 0;
$pagoExtra = 0;
$pagoTotal = 0;
$horasExtras = 0;

$mesgError = "";
if (isset($_POST['calcular'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cantidadHoras = $_POST['hora'];
    $precioNormal = $_POST['precio'];
    $precioExtra = $_POST['precioextra'];

    if (empty($nombre) || empty($cantidadHoras)) {
        $mesgError = '<div class="alert alert-danger" role="alert">
    Complete los campos faltantes
  </div>';
    } else {
        if ($cantidadHoras >= 0 && $cantidadHoras <= 40) {
            $pagoNormal = $cantidadHoras * $precioNormal;
        } elseif ($cantidadHoras > 40) {
            $pagoNormal = 40 * $precioNormal;
            $horasExtras = $cantidadHoras - 40;
            $pagoExtra = $horasExtras * $precioExtra;
        } else {
            echo "Error en los datos ingresados";
        }
    }
    $pagoTotal = $pagoNormal + $pagoExtra;
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
    <title>Ejercicio 5</title>
</head>

<body>
    <header class="container">
        <h2>
            Aumento de salario de empleado segun horas trabajadas
        </h2>
    </header>
    <main class="container">
        <form action="ejercicio5.php" method="POST">
            <fieldset class="row g-3">
                <legend>DATOS DE EMPLEADOS</legend>

                <div class="col-md-4">
                    <label for="EMPLEADO" class="form-label">NOMBRE EMPLEADO</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese nombre">
                </div>
                <div class="col-md-4">
                    <label for="APELLIDO" class="form-label">APELLIDO EMPLEADO</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese apellidos">
                </div>

            </fieldset>
            <fieldset class="row g-3">
                <legend>Horas trabajadas</legend>

                <div class="col-md-4">
                    <label for="hora" class="form-label">Horas</label>
                    <input type="number" max="60" class="form-control" name="hora" id="hora" placeholder="">
                </div>

                <div class="col-md-4">
                    <label for="precio" class="form-label">Precio por hora normal</label>
                    <input type="text" max="4" class="form-control" name="precio" id="precio" placeholder="">
                </div>
                <div class="col-md-4">
                    <label for="precioextra" class="form-label">Precio por hora extra</label>
                    <input type="text" max="6" class="form-control" name="precioextra" id="precioextra" placeholder="">
                </div>
            </fieldset>


            <div class="col-12 my-2">
                <button type="submit" name="calcular" class="btn btn-success">Procesar</button>

            </div>
        </form>

        <div class="alert alert-primary" role="alert">
            <strong>Nombre completo: </strong>
            <?php echo $nombre . " " . $apellido ?>
            <br>
            <hr>

            <strong>Cantidad de horas trabajadas </strong>
            <?php echo $cantidadHoras ?>
            <br>
            <hr>
            <strong>Pago hora normal; </strong>
            <?php echo $pagoNormal ?>
            <br>
            <hr>

            <strong>Pago Horas extras; </strong>
            <?php echo $pagoExtra ?>
            <br>
            <hr>

            <strong>Pago Total; </strong>
            <?php echo $pagoTotal ?>
            <br>
            <hr>
        </div>
        </div>
        </form>
    </main>
</body>

</html>