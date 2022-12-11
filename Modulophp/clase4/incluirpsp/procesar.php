<?php  
if (isset($_REQUEST['procesar'])) {
    $nombre = $_REQUEST['Nombre'];
    $edad = $_REQUEST['edad'];
    $pais = $_REQUEST['pais'];
    $fecha = $_REQUEST['fecha'];
    $hora = $_REQUEST['hora'];
    $direccion = $_REQUEST['direccion'];
    $genero = $_REQUEST['genero'];
   

    echo '<br> <strong>Nombre: </strong>'.$nombre;
    echo '<br> <strong>Edad: </strong>'.$edad;
    echo '<br> <strong>Pais: </strong>'.$pais;
    echo '<br> <strong>direccion: </strong>'.$direccion;
    echo '<br> <strong>fecha: </strong>'.$fecha;
    echo '<br> <strong>hora: </strong>'.$hora;
    echo '<br> <strong>sexo: </strong>'.$genero;
    echo '<br> <strong>comida: </strong>';
    foreach ($_REQUEST['comidasF'] as $datos){
        echo $datos . '<br>';
    }
calcularEdad($edad);

}

function calcularEdad($edad){
    if ($edad > 18) {
        echo "Usted es mayor de edad";
    }else {
        echo "Usted no es mayor de edad";
    }
}
?>