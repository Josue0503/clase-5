<?php
// Realice una aplicación que calcule el salario neto a pagar los empleados
// de una Empresa. Dicha empresa realiza los siguientes descuentos.
// ISSS (9%)
// AFP (7%)
// Renta (10%) - Se aplica, si el salario base es mayor a $ 472.00.
// La aplicación debe pedir nombre, apellido y el salario base del empleado, mostrar
// el salario neto y los descuentos respectivos.
// Use formularios
// Puede usar Bootstrap
// La aplicación deber mostrar los resultados

$nombre = "";
$apellido = "";
$salarioB = 0;
$salario1 = 0;
$salarioN = 0;
$isss = 0;
$afp = 0;
$sCrenta = 0;




$mesgError = "";
if (isset($_POST['procesar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $salarioB = $_POST['salarioB'];
    //procesos
    if ($salarioB < 472) {
        $isss = $salarioB * 0.09;
        $afp = $salarioB * 0.07;
        $salario1 = ($salarioB - $isss - $afp);
    } elseif ($salarioB > 472) {
        $isss = $salarioB * 0.09;
        $afp = $salarioB * 0.07;
        $sCrenta = $salarioB * 0.1;
    }
    $salarioN = ($salarioB - $afp - $sCrenta - $isss);
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
    <title>Ejercicio</title>
</head>

<body>
    <header class="container">
        <h2>
            Salarios
        </h2>
    </header>
    <main class="container">
        <form action="evaluacion.php" method="POST">
            <fieldset class="row g-3">
                <legend>Ingresar datos</legend>

                <div class="col-md-6">
                    <label for="nombre" class="form-label">Ingresar nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Don chepe" required>
                </div>

                <div class="col-md-6">
                    <label for="apellido" class="form-label">Ingresar apellido</label>
                    <input type="text" class="form-control" name="apellido" placeholder="Poncho" required>
                </div>

                <div class="col-md-6">
                    <label for="salarioB" class="form-label">Ingrese salario base</label>
                    <input type="text" class="form-control" name="salarioB" placeholder="$0.00" required>
                </div>

            </fieldset>


            <div class="col-12 my-2">
                <button type="submit" name="procesar" class="btn btn-success">Procesar</button>

                <div class="alert alert-primary" role="alert">
                    ISSS: <?php echo "$". $isss; ?> <br>
                    <hr>
                    AFP: <?php echo  "$". $afp; ?> <br>
                    <hr>
                    Renta: <?php echo "$". $sCrenta; ?> <br>
                    <hr>
                    Sueldo neto: <?php echo "$". $salarioN; ?> <br>
                    <hr>
                </div>
            </div>
        </form>
    </main>
</body>

</html>