<?php
/*7. Elaborar un sistema de facturación que pida el nombre del vendedor, nombre del cliente, fecha de factura,
número de factura y suma de ventas realizadas. A la suma de ventas realizadas, se les hará un descuento según
la siguiente tabla: */
$descuento = 0;
$nombre = "";
$nombreC = "";
$ffactura = "";
$numFac = "";
$ventasTotales = 0;
$TaPagar = 0;


if (isset($_POST['enviar'])) {
    $nombre = $_POST['Nvendedor'];
    $nombreC = $_POST['Ncliente'];
    $ffactura = $_POST['Ffactura'];
    $numFac = $_POST['Nfactura'];
    $ventasTotales = $_POST['Vtotales'];


if ($ventasTotales > 0 && $ventasTotales < 100) {
    $descuento = 0;
} elseif ($ventasTotales >= 100 && $ventasTotales <= 500) {
    $descuento = $ventasTotales * 0.15;
} elseif ($ventasTotales > 500 && $ventasTotales <= 500){
    $descuento = $ventasTotales*0.2;
}else{
    $descuento = $ventasTotales*0.3;
}
$TaPagar = $ventasTotales-$descuento;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>ejercicio7</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header class="container">
        <h1>Sistema de Facturaciòn</h1>
    </header>

    <main class="container">
        <form class="row g-3" method="POST" action="ejercicio7.php">
            <div class="col-md-6">
                <label for="Nvendedor" class="form-label">Nombre de vendedor</label>
                <input type="text" class="form-control" name="Nvendedor" placeholder="CHEPE TRES PELOS">
            </div>
            <div class="col-md-6">
                <label for="ncliente" class="form-label">Nombre del cliente</label>
                <input type="text" class="form-control" name="Ncliente" placeholder="CLIENTE CHEPITO SEGUNDO">
            </div>
            <div class="col-6">
                <label for="Ffactura" class="form-label">Fecha de factura</label>
                <input type="date" class="form-control" name="Ffactura">
            </div>
            <div class="col-6">
                <label for="Nfactura" class="form-label">Numero de Factura</label>
                <input type="text" class="form-control" name="Nfactura" placeholder="NC-000001">
            </div>

            <div class="col-6">
                <label for="Vtotales" class="form-label">Ventas totales</label>
                <input type="text" class="form-control" name="Vtotales" placeholder="$0.00">
            </div>


            </div>
            <div class="col-12">
                <button type="submit" id="enviar" name="enviar" class="btn btn-primary">Calcular</button>
            </div>
        </form>
    </main>
    <footer>
        <div class="alert alert-success" role="alert">
          <strong>
            Nombre vendedor: 
          </strong>
          <?php echo $nombre; ?>
          <br>
          <strong>
            Fecha de facturación:  
          </strong>
          <?php echo $ffactura; ?>
          <br>
          <strong>
            Numero de facturación:
          </strong>
          <?php echo $numFac; ?>
          <br>
          <strong>
            Ventas: $
          </strong>
          <?php echo $ventasTotales; ?>
          <br>
          <strong>
            Descuento: $
          </strong>
          <?php echo $descuento; ?>
          <br>
          <h3>
            
          <strong>
            Total a pagar es: $
          </strong>
<?php echo $TaPagar ?>
          </h3>
        </div>
    </footer>
</body>

</html>