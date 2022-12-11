<?php
require_once 'vehiculo.php';
//objeto o instancia

$vehiculo = new Vehiculo();

//enviando la informacion de getter and setter 
    $vehiculo ->setMarca("Nissan");
    $vehiculo ->setModelo("Modelo1");
    $vehiculo ->setColor("Azul");
    $vehiculo ->setPlaca("P-999999");

$vehiculo->Imprimir();



?>