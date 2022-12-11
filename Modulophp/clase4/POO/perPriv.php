<?php
class persona
{

    private $name;
    private $edad;
    private $address;

    //METODO GET AND SETTER
    function setname($name)
    {
        $this->name = $name;
    }
    function getname()
    {
        return $this->name;
    }
   /* */

   function setedad($edad)
   {
       $this->edad = $edad;
   }
   function getedad()
   {
        return $this->edad;
   }
   /**/

   function setaddress($address)
    {
        $this->address = $address;
    }
    function getaddress()
    {
        return $this->address;
    }
    
}

//OBJETO O INSTANCIA
$person = new persona();
$person->setname('Jasson');
$person->setedad(17);
$person->setaddress('Zacatecoluca');


echo '<br> Nombre: ' . $person->getname();
echo '<br> Edad: ' . $person->getedad();
echo '<br> Direccion: ' . $person->getaddress();

?>