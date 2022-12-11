<?php 
class persona
{
    
    public $name = "Jasson";
    public $edad = 17;
    public $direccion = "Zacatecoluca";

}

//OBJETO O INSTANCIA
$person = new persona();

echo '<br> Nombre: '. $person->name;
echo '<br> Edad: '. $person->edad;
echo '<br> Dirección: '. $person->direccion;

?>

