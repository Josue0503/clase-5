<?php
$num = 20;

if (($num == 10 && 10 > 34) || 100 == 100 && !true) {
    echo "Condición verdadera, el numero es: " . $num;
} else {
    echo "Es falso";
}
echo "<hr>";
//anidado
$nota = 8;

if ($nota >= 0 && $nota <= 7) {
    echo "Tiene que ir a recuperación igual que <strong>Ariel</strong>";
} elseif ($nota > 5 && $nota <= 7) {
    echo "Buena nota";
} else {
    echo "Ariel salvó el año escolar, Excelete nota";
}
echo "<hr>";

//switch
$dia = 7;
switch ($dia) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Lunes";
        break;
    case 3:
        echo "Martes";
        break;
    case 4:
        echo "Miercoles";
        break;
    case 5:
        echo "Jueves";
        break;
    case 6:
        echo "Viernes";
        break;
    case 7:
        echo "Sabado";
        break; 

        default:
        echo 'Dia no valido';
        break;
}
