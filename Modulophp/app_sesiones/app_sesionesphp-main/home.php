<?php
//FUNCION PARA CREAR SESSIONES
session_start();

//VERIFICA SI LA SESSIÓN DE AUTORIZACIÓN EXISTE
if (!$_SESSION["autorizado"]) {
    header("location: ./?logout");
    # code...
}
$cont = 0;
$mensaje = "";
$msg = "";
//ACCIÓN DEL FORMULARIO A PROCESAR
if (isset($_POST["procesar"])) {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dui = $_POST["dui"];
    $direccion = $_POST["direccion"];
    $sexo = $_POST["sexo"];
    $salario = $_POST["salario"];
    $aceptar = $_POST["aceptar"];

    //Fotos
    //image upload
    $msg = "";
    $image = $_FILES['foto']['name'];
    $target = "fotos/" . basename($image);
    //MOVER IMAGEN QUE HA SELECCIONADO EL USUARIO
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "Failed to upload image";
    }

    //ARREGLO DE SESSIONES
    $_SESSION["empleados"][] = array(
        "foto" => $target,
        "nombre" => $nombre,
        "apellido" => $apellido,
        "dui" => $dui,
        "direccion" => $direccion,
        "sexo" => $sexo,
        "salario" => $salario,
        "aceptar" => $aceptar

    );

    //MENSAJE SE SI HA GUARDADO EL EXAMEN
    $mensaje = '<div class="alert alert-info" role="alert">
    Datos almacenados correctamente!<br>' . $msg . '
  </div>';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Menu Principal</title>
</head>

<body>
    <header class="container">
        <nav>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cerrar.php">Cerrar Sesión</a>
                </li>

            </ul>
        </nav>
    </header>
    <main class="container">
        <section>
            <div class="jumbotron">
                <h1 class="display-4">Bienvenido al menu principal! <?php echo $_SESSION["user"] ?></h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam aut dolorum sit
                    aspernatur soluta, perspiciatis quod consectetur obcaecati nostrum! Voluptate provident animi sint
                    deserunt molestias consequuntur perspiciatis incidunt quae culpa..</p>
                <hr class="my-4">
                <?php
                echo $mensaje;
                ?>

            </div>
        </section>
        <!-- SECCIÓN DEL FORMULARIO -->
        <section>
            <!-- FORMULARIO -->
            <form action="home.php" autocomplete="OFF" enctype="multipart/form-data" method="POST"
                class="row g-3 shadow-sm p-3 mb-5 bg-body rounded">
                <!-- INPUT NOMBRE -->
                <div class="col-md-4">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" placeholder="Nombre" class="form-control" required id="nombre" name="nombre">
                </div>
                <!-- INPUT APELLIDO -->
                <div class="col-md-4">
                    <label for="apellido" class="form-label">Apellido: </label>
                    <input type="text" required placeholder="Apellido" class="form-control" id="apellido"
                        name="apellido">
                </div>
                <!-- INPUT DUI -->
                <div class="col-md-4">
                    <label for="dui" class="form-label">DUI: </label>
                    <input type="text" required placeholder="00000000-0" class="form-control" id="dui" name="dui">
                </div>
                <!-- INPUT DIRECCIÓN -->
                <div class="col-12">
                    <label for="direccion" class="form-label">Dirección: </label>
                    <textarea name="direccion" required id="direccion" class="form-control"></textarea>
                </div>
                <!-- SELECT SEXO -->
                <div class="col-md-4">
                    <label for="sexo" class="form-label">Sexo: </label>
                    <select id="sexo" required name="sexo" class="form-select">
                        <option value="">Seleccione</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Femenino">Todos los dias, por favor</option>
                    </select>
                </div>
                <!-- INPUT SALARIO -->
                <div class="col-md-2">
                    <label for="salario" class="form-label">Salario</label>
                    <input type="text" name="salario" placeholder="0.0" class="form-control" required id="salario">
                </div>
                <!-- INPUT FILE -->
                <div class="col-md-6">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" name="foto" placeholder="Foto" class="form-control" required id="foto">
                </div>
                <!-- INPUT CHECKBOX -->
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" required type="checkbox" id="aceptar" name="aceptar">
                        <label class="form-check-label" for="aceptar">
                            Acepta los términos y condiciones del registro
                        </label>
                    </div>
                </div>

                <!-- INPUT BUTTON SUBMIT -->
                <div class="col-12">
                    <button type="submit" name="procesar" class="btn btn-primary">Procesar</button>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target=".bd-example-modal-lg">Ver Datos</button>
                </div>
            </form>
            <hr>


            <!-- MODAL QUE SE HA CREADO POR MEDIO DE BOOSTRAP -->

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">DATOS DE EMPLEADOS</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div id="mensaje">

                            </div>
                            <?php


                            /*  echo "<pre>";
                print_r($_SESSION["empleados"]);
                echo "</pre>"; */

                            /*  echo count($_SESSION["empleados"]);

                            CREACIÓN DE LA TABLA
 */
                            $renta = 0;
                            echo " <table class='table table-striped table-bordered table-hover'>    
                            <thead class='table-dark'>

                                <tr>
                                    <th>N°</th>
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>DUI</th>
                                    <th>Dirección</th>
                                    <th>Sexo</th>
                                    <th>Salario</th>
                                    <th>Renta 10%</th>
                                    <th>Total a Pagar</th>
                                    <th>Acciones</th>
                                </tr>

                            </thead>
                            <tbody>";

                            if (isset($_SESSION["empleados"]) && count($_SESSION["empleados"]) > 0) {
                                # code...


                                foreach ($_SESSION["empleados"] as $key => $row) {
                                    # code...


                            ?>

                            <tr>
                                <td><?php echo $key + 1 ?> </td>
                                <td><img src="<?php echo $row['foto']  ?>" class="img-thumbnail rounded-circle"
                                        alt="..." style="width: 100px !important;"> </td>
                                <td><?php echo  $row['nombre']; ?></td>
                                <td><?php echo  $row["apellido"]; ?></td>
                                <td><?php echo  $row["dui"]; ?></td>
                                <td><?php echo  $row["direccion"] ?></td>
                                <td><?php echo  $row["sexo"] ?></td>
                                <td>$ <?php echo  number_format($row["salario"], 2) ?></td>
                                <td><?php
                                            if ($row["salario"] >= 500) {
                                                $renta = $row["salario"] * 0.1;
                                                # code...
                                            }

                                            echo "$ " . number_format($renta, 2);
                                            ?></td>
                                <td><?php echo  "$" . number_format($row["salario"] - $renta, 2); ?></td>
                                <td>
                                    <button type="button" class="btn btn-danger"
                                        onclick="eliminar(<?php echo $key ?>)"><span
                                            class="fa fa-trash"></span></button>
                                    <button type="button" class="btn btn-primary"><span
                                            class="fa fa-edit"></span></button>
                                </td>
                            </tr>

                            <?php }
                            } else {
                                echo "<tr><td colspan='11'>No hay datos almacenados</td></tr>";
                            }

                            echo "
                            </tbody>
                        </table>";


                            ?>
                        </div>
                        <div class="modal-footer">
                            <?php
                            if (isset($_SESSION["empleados"]) && count($_SESSION["empleados"]) > 0) {
                                # code...

                            ?>
                            <button type="button" class="btn btn-warning" onclick="eliminarTodo()"><span
                                    class="fa fa-edit"></span> Eliminar
                                todo</button>

                            <?php
                            }
                            ?>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>


        </section>
    </main>
</body>
<!-- LIBERÍA PARA USAR FUNCIONES DE JQUERY -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- JS DE BOOSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<!-- LIBRERÍA PARA COLOCAR MASCARAS A LOS INPUTS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
    integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
/* ASIGNAR MASCARAS A LOS INPUTS DE SALARIO Y DUI POR MEDIO DE SU ID */
$(document).ready(function() {
    $('#salario').mask('###.00', {
        placeholder: "00.00",
        reverse: true
    });

    $('#dui').mask("00000000-0", {
        clearIfNotMatch: true,
        placeholder: "________-_"
    });

});
</script>
<script>
/* REDIRECCIONAR A UNA PAGINA POR MEDIO DE JAVASCRTIP */
function redireccionar() {
    window.location.href = "home.php";
}

/* FUNCIÓN PARA ELIMINAR LOS DATOS DE LA SESSIÓN POR MEDIO DE INDICE */
function eliminar(id) {
    if (confirm(
            "Seguro de Eliminar?"
        )) {
        /* AJAX */
        $.ajax({
            type: "POST", //MÉTODO POST
            url: "eliminar.php", //DONDE SE REALIZARÁ LA ACCIÓN
            data: "id=" + id, //PARAMETRO A ENVIAR
            beforeSend: function(objeto) {
                //MENSAJE A MOSTRAr
                $("#mensaje").html('<div class = "alert alert-warning" > Procesando...</div>');
                // Escribimos en el div consola el mensaje devuelto
            },
            success: function(datos) {
                $("#mensaje").html(
                    '<div class = "alert alert-success" > Datos Eliminados...</div>' + datos
                ); // Escribimos en el div consola el mensaje devuelto
                setTimeout("redireccionar()", 3000);
            }

        });

    } else {
        return false;
    }
};

/* eliminar todas las sessiones */

function eliminarTodo() {
    if (confirm(
            "Seguro de Eliminar?"
        )) {
        $.ajax({
            type: "POST",
            url: "eliminar.php",
            data: "todo=true",
            beforeSend: function(objeto) {

                $("#mensaje").html('<div class = "alert alert-success" > Procesando...</div>');
                // Escribimos en el div consola el mensaje devuelto
            },
            success: function(datos) {
                $("#mensaje").html(
                    '<div class = "alert alert-success" >Todos sus Datos Eliminados...</div>' + datos
                ); // Escribimos en el div consola el mensaje devuelto
                setTimeout("redireccionar()", 3000);
            }

        });

    } else {
        return false;
    }
};
</script>

</html>