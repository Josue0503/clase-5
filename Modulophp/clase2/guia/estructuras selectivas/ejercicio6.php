<?php
// En una tienda de descuento se efectúa una promoción en la cual se hace un descuento sobre el valor de la
// compra total según el color de la bolita que el cliente saque al pagar en caja. Si la bolita es blanca no se le hará
// descuento alguno, si es verde se le hará un 10% de descuento, si es amarilla un 25%, si es azul un 50% y si es roja
// un 100%. Determinar la cantidad final que un cliente deberá pagar por su compra. Se sabe que sólo hay bolitas
// de los colores mencionados.

$nombre = "";
$producto1 = 0;
$producto2 = 0;
$producto3 = 0;
$descuento = 0;
//proceso del ejercicio
$pagoNormal = 0;
$pagoDescuento = 0;


$mesgError = "";
if (isset($_POST['calcular'])) {
    $nombre = $_POST['nombre'];
    $producto1 = $_POST['producto1'];
    $producto2 = $_POST['producto2'];
    $producto3 = $_POST['producto3'];
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
descuento
        </h2>
    </header>
    <main class="container">
        <form action="ejercicio5.php" method="POST">
            <fieldset class="row g-3">
                <legend>DATOS DE LA COMPRA</legend>

                <div class="col-md-4">
                    <label for="EMPLEADO" class="form-label">NOMBRE CLIENTE</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese nombre">
                </div>
                <div class="col-md-4">
                    <label for="APELLIDO" class="form-label">PRECIO PRODUCTO 1</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese apellidos">
                </div>

                <div class="col-md-4">
                    <label for="APELLIDO" class="form-label">PRECIO PRODUCTO 2</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese apellidos">
                </div>

                <div class="col-md-4">
                    <label for="APELLIDO" class="form-label">PRECIO PRODUCTO 3</label>
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

