<?php
session_start();
$mensaje = "";
//PROCESAR EL FORMULARIO DEL LOGIN
if (isset($_POST["login"])) {
    //VALIDAR QUE NO ESTEN VACÍOS LOS CAMPOS
    if (!empty($_POST["user"] && !empty($_POST["password"]))) {
        $user = $_POST["user"];
        $pass = $_POST["password"];
        //ASIGAR Y VERIFICAR LOS DATOS DE ACCESO A LA PÁGINA PRINCIPAL
        if ($user == "DentalBrackets" && $pass == "23342067") {
            //CREAR LAS SESIONESPARA PODER NAVEGAR DENTRO DE LA PÁGINA PRINCIPAL
            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;
            $_SESSION["autorizado"] = true;
            //REDIRECCIONAR A LA PÁGINA HOME
            header("location: home.php");
        } else {
            $mensaje = '<div class="alert alert-danger" role="alert">Usuario o Contraseña Incorrecta</div>';
        }
    } else {
        $mensaje = '<div class="alert alert-danger" role="alert">Datos vacíos</div>';
    }
}

if (isset($_GET["logout"])) {
    $mensaje = '<div class="alert alert-danger" role="alert">Cerraste Sesión</div>';
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    main {
        width: 50% !important;

    }

    body {
        background-image: linear-gradient(131deg, rgb(22 23 24 / 69%), rgba(8, 83, 156, 0.50)), url('https://images.unsplash.com/photo-1432821596592-e2c18b78144f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bG9naW58ZW58MHx8MHx8&w=1000&q=80');
        background-size: cover;
        height: 100vh;

    }

    form {
        background-color: khaki;
        padding: 20px;
    }

    h3 {
        color: khaki;
    }
    </style>
</head>

<body>
    <header class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Proyecto</a>
            </div>
        </nav>
    </header>
    <main class="container">
        <br>
        <section>

            <h3>PHP - Login</h3>
            <hr />


            <div class="alert alert-success" role="alert">Ingresar</div>
            <?php echo $mensaje; ?>
            <!-- FORMULARIO DE LOGIN -->
            <form method="POST" action="./" autocomplete="off">
                <!-- INPUT USUARIO -->
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" required name="user" placeholder="Usuario" class="form-control" />
                </div>
                <!-- INPUT CLAVE -->
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" required placeholder="Password" name="password" class="form-control" />
                </div>
                <br />
                <!-- BUTTON PARA PROCESAR LA INFORMACIÓN -->

                <button class="btn btn-primary form-control" name="login"><span></span> Ingresar</button>
            </form>

        </section>
    </main>

</body>


</html>