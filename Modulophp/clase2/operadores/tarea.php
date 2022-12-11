<?php
/*Un alumno desea saber cuál será su calificación final en la materia de lógica de programación. Dicha calificación
se compone de los siguientes porcentajes:
55% del promedio de sus tres calificaciones parciales.
30% de la calificación del examen final.
15% de la
/*promedio notas*/ 
$promediofinal = 0;
if (isset($_POST['procesar'])) {
    $nota1=$_POST['nota1'];
    $nota2=$_POST['nota2'];
    $nota3=$_POST['nota3'];

    $examF = $_POST['examen'];
    $trabajo =$_POST['trabajo'];

    $promediofinal = (($nota1+$nota2+$nota3)/3)*0.55+$examF*0.3+$trabajo*0.15;
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
            Ejercicio 9
        </h2>
    </header>
   <main class="container">
   <form action="tarea.php" method="POST">
    <fieldset class="row g-3">
        <legend>Notas parciales</legend>
    
  <div class="col-md-4">
    <label for="nota1" class="form-label">Nota 1</label>
    <input type="text" class="form-control" id="inputEmail4" name="nota1" id="nota1" placeholder="0.00">
  </div>
  <div class="col-md-4">
    <label for="nota2" class="form-label">Nota 2</label>
    <input type="text" class="form-control" id="nota2" name="nota2" placeholder="0.00">
  </div>
  <div class="col-md-4">
    <label for="nota3" class="form-label">Nota 3</label>
    <input type="text" class="form-control" name="nota3" id="nota3" placeholder="0.00">
  </div>
  </fieldset>
<fieldset>
    
<fieldset class="row g-3">
        <legend>Nota de examen</legend>
    
  <div class="col-md-4">
    <label for="examen" class="form-label">Nota 1</label>
    <input type="text" class="form-control" id="examen" name="examen" class="examen" placeholder="0.00">
  </div>

  </fieldset>

  <fieldset class="row g-3">
        <legend>Nota de Trabajo final</legend>
    
  <div class="col-md-4">
    <label for="trabajo" class="form-label">Trabajo final</label>
    <input type="text" class="form-control" id="trabajo" name="traba" class="trabajo" placeholder="0.00">
  </div>

  </fieldset>
  
  <div class="col-12 my-2">
    <button type="submit" name="procesar" class="btn btn-success">Procesar</button>

    <div class="alert alert-primary" role="alert">
        Promedio Final: <?php echo number_format($promediofinal,2); ?>
    </div>
  </div>
</form>
   </main>
</body>
</html>