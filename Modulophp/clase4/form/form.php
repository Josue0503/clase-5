<!DOCTYPE html>
<html lang="es">
    <head>
        <title>form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form action="procesar.php">
        <label for="">Nombre</label>
        <input type="text" name="Nombre" placeholder="Escribe tu nombre" required   >
        <hr>
        <label for="">Edad</label>
        <input type="number" name="edad" value="1" required>
        <hr>
        <label for="">País</label>
        <select name="pais" id="" required>
            <option value="
            ">Seleccione una opción</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Mexico">México</option>
        </select>
        <hr>
        <label for="">Foto</label>
        <input type="file" name="foto" required>
        <hr>
        <label for="">Fecha</label>
        <input type="date" name="fecha" required>
        <hr>
        <label for="">Hora</label>
        <input type="time" name="hora" required>
        <hr>
        <label for="">Dirección:</label>
        <textarea rows="2" name="direccion" cols="20"></textarea>
<hr>
<label for="">Género: </label>
M <input type="radio" checked value="M" name="genero" required>
F <input value="F" type="radio" name="genero" required>
<hr>
<label for="">Favorite food</label>
<input type="checkbox" value="carne" name="comidasF[]">carne
<input type="checkbox" value="pollo" name="comidasF[]">pollo
<input type="checkbox" value="pescado" name="comidasF[]">pescado
<input type="checkbox" value="frijol"  name="comidasF[]">frijol
<hr>
<button type="reset" name="procesar">Borrar todo</button>
        <button type="submit" name="procesar">Enviar</button>
    </form>
    </body>
</html>