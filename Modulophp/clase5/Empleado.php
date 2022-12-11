<?php
//herencia.

require_once 'Persona.php';
class Empleado extends Persona
{

//atributos

private $sueldo;


//metodo getter and setter

function setSueldo($sueldo){
    $this -> sueldo=$sueldo;
}
function getSueldo(){
    return $this->sueldo;
}

function Imprimir()
{
echo '<hr><br>Nombre: ' . $this->getNombre();
echo '<hr><br>Apellido: ' . $this->getApellido();
echo '<hr><br>Sueldo: ' . $this->getSueldo() . '<hr><br>';
echo '<hr><br>' . $this->Comer();
echo '<hr><br>' . $this->Dormir();
echo '<hr><br>' . $this->Beber();


}

}



?>