<?php
// En un hospital existen tres áreas: Pediatría, Oncología y Traumatología. El presupuesto anual del hospital se
// reparte conforme a la siguiente tabla:
    //pediatria 30, oncologia 40, traumatologìa 30
    $pediatria = 0;
    $oncologia = 0;
    $traumatologia = 0;
    $total = 0;
    if (isset($_POST['procesar'])) {
        $presupuesto=$_POST['presupuesto'];
        
        $pediatria = $presupuesto*0.3;
        $oncologia = $presupuesto*0.4;
        $traumatologia = $presupuesto*0.3;
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
           Presupuesto Hospital Nacional Santa Teresa
        </h2>
    </header>
   <main class="container">
   <form action="ejercicio11.php" method="POST">
    <fieldset class="row g-3">
        <legend>Ingresar presupuesto</legend>
    
  <div class="col-md-4">
    <label for="nota1" class="form-label">Presupuesto total</label>
    <input type="text" class="form-control"  name="presupuesto" id="presupuesto" placeholder="$0.00">
  </div>

  </fieldset>

  
  <div class="col-12 my-2">
    <button type="submit" name="procesar" class="btn btn-success">Procesar</button>

    <div class="alert alert-primary" role="alert">
        Pediatrìa <?php echo number_format($pediatria)?> <br> <hr>
        Oncología <?php echo number_format($oncologia); ?> <br> <hr> 
        Traumatología <?php echo number_format($traumatologia); ?> <br> <hr>
    </div>
  </div>
</form>
   </main>
</body>
</html>