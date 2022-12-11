<?php
session_start();
$error = "";
if (isset($_POST['procesar'])) {
    $email = $_POST['email'];
    $clave = $_POST['clave'];

    if ($email == "admin@admin.com" && $clave == 'ZacateCity2022') {
        $_SESSION['usuario'] = 'Jasson';
        $_SESSION['ok'] = '';
        header('location: menu.php');
    } else {
       $error = '<div class="alert alert-danger" role="alert">
  A simple danger alert with <a href="#" class="alert-link">an example link</a>. Usuario o Contraseña incorrecta
</div>';
    } 
}

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Menù php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
       <header class="container">
        <h1>Inicio de sesiòn</h1>
       </header>
    <main class="container">
    <form action="index.php" method="POST">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="eje@gvk.com">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña </label>
    <div class="col-sm-10">
      <input type="password"  name="clave" class="form-control" id="inputPassword3">
    </div>
  
  <button type="submit" name="procesar" class="btn btn-primary">Iniciar sesion </button>
</form>

<hr>
<?php echo $error; ?>

    </main>
    </body>
</html>