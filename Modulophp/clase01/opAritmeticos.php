<?php
//Operadores aritmeticos
//suma +
//resta -
//Multiplicación *
//division /
//modulo %

$num1 = 13;
$num2 = 10;

echo "La suma es: ".$num1+$num2."<br>";
echo "La resta es: ".$num1-$num2."<br>";
echo "La multiplicacion es: ".$num1*$num2."<br>";
echo "La división es: ".$num1/$num2."<br>";
echo "EL modulo es: ".$num1%$num2."<br>";
?>

<!-- inicio de html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Operadores aritmeticos</title>
</head>
<body>
    
<table class="table">
<thead class="table-dark">
        <tr>
            <th>
                SUMA
            </th>
            <th>
                RESTA
            </th>
            <th>
                MULTIPLICACIÓN
            </th>
            <th>
                DIVISIÓN
            </th>
            <th>
                MODULO
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
            <?php echo $num1+$num2  ?>
            </td>
            
            <td>
            <?php echo $num1-$num2  ?>
            </td>
            <td>
            <?php echo $num1*$num2  ?>
            </td>
            <td>
            <?php echo $num1/$num2  ?>
            </td>
            <td>
            <?php echo $num1%$num2  ?>
            </td>
        </tr>
    </tbody>
</table>

</body>
</html>