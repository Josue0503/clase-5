<?php  
// Leer 100 números enteros y contar cuántos de ellos son positivos, negativos o nulos.
$positivo=0;
$negativo=0;
$nulo=0;

for ($i=0; $i < 100; $i++) { 
    $num= rand(-10,10);
    echo $num ." ,";

    if ($num==0) {
        $nulo++;
    }else if ($num>0) {
    $positivo ++;
    }else{
        $negativo++;
    }
}

echo "La cantidad de numeros positivos es: ".$positivo."\n";
echo "La cantidad de numeros negativo es: ".$negativo."\n";
echo "La cantidad de numeros nulo es: ".$nulo."\n";
?>