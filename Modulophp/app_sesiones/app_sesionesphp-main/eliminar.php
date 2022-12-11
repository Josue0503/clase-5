<?php
session_start();
if (isset($_POST["id"])) {
    //eLIMINIA LOS ARCHIVOS
    unlink($_SESSION["empleados"][$_POST["id"]]["foto"]);
    //ELIMINA LA SESSIÓN
    unset($_SESSION["empleados"][$_POST["id"]]);
}

if (isset($_POST["todo"])) {

    foreach ($_SESSION["empleados"] as $key => $row) {
        unlink($row["foto"]);
    }

    unset($_SESSION["empleados"]);
}