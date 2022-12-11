<?php

// Calcule el aumento de sueldos para 50 empleados de una empresa, bajo el siguiente criterio:
// a. Si el sueldo es menor a $1000: aumento 12%
// b. Si el sueldo está comprendido entre $1000 y $25000: aumento 10%
// c. Si el sueldo es mayor a $25000: aumento 8%
// d. Imprima el nuevo sueldo del trabajador y el monto total de la nómina considerando el aumento.

$cantidadEmpleado = readline('Ingrese el numero de empleados: ');
$aumento =0;

for ($i=0; $i < $cantidadEmpleado; $i++) { 
    echo "--------------------\n";
    echo "Información del empleado #: ".$cantidadEmpleado .($i +1)."\n";
    $sueldo = readline();
    if ($sueldo<1000){
        $aumento = $sueldo*0.12;
    }else if($sueldo>=1000 && $sueldo <=25000){
        $aumento = $sueldo *0.1;
    }else {
        $aumento = $sueldo*0.08;
    }
    echo "El sueldo sin aumento: ".$sueldo."\n";
    echo "Aumento: ".$aumento;
    echo "Sueldo a pagar con aumento incluido: ".($sueldo+$aumento)."\n";
}
