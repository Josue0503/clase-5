<?php
$num1 = 10;
$num2 = 10;

//EJEMPLO DE OPERADOR ==
$bool = $num1 == $num2;
//EJEMPLO DE OPERADOR >=
$BOOL1 = $num1 >= $num2;
//EJEMPLO DE OPERADOR >=
$BOOL2 = $num1 <= $num2;
//EJEMPLO DE OPERADOR >
$BOOL3 = $num1 > $num2;
//EJEMPLO DE OPERADOR <
$BOOL4 = $num1 < $num2;
//EJEMPLO DE OPERADOR !=
$BOOL5 = $num1 != $num2;

echo "Num1: " . $num1 . "<br>";
echo "Num1: " . $num2 . "<br> <hr>";
echo "Operador = " . $bool . "<br><hr>";
var_dump($bool);
echo "Operador >= " . $BOOL1 . "<br><hr>";
var_dump($BOOL1);
echo "Operador <= " . $BOOL2 . "<br><hr>";
var_dump($BOOL2);
echo "Operador > " . $BOOL3 . "<br><hr>";
var_dump($BOOL3);
echo "Operador < " . $BOOL4 . "<br><hr>";
var_dump($BOOL4);
echo "Operador != " . $BOOL5 . "<br><hr>";
var_dump($BOOL5);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionales</title>
</head>

<body>
    <header>
        <h1>Operadores Relacionales</h1>
    </header>
</body>

</html>