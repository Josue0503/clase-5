<?php
//calcular perimetro y area de un rectangulo dada su base y altura

$base = 12;
$altura = 25;
$perimetro = 2 * ($base + $altura);
$area = $base * $altura;

echo "El perimetro de un rectangulo es: " . $perimetro . "<br>";
echo "El area de un rectangulo es: " . $base;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Perimetro y area de un rectangulo</title>
</head>

<body>

<table class="table table-success table-striped">
        <thead>
            <tr>
                <th>Perimetro</th>
                <th>Area</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $perimetro ?>
                </td>
                <td>
                    <?php echo $area ?>
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>