<?php
class vehiculo
{
    private $marca;
    private $color;
    private $tipocarro;
    private $placa;


    //metodo getter and setter

    function setmarca($marca)
    {
        $this->marca = $marca;
    }
    function getmarca($marca)
    {
        return $this = $marca;
    }

    //color
    function setcolor($color)
    {
        $this->color = $color;
    }
    function getcolor($color)
    {
        return $this = $color;
    }

    //tipo carro

   function settipocarro($tipocarro)
    {
        $this->tipocarro = $tipocarro;
    }
    function gettipocarro($tipocarro)
    {
        return $this = $tipocarro;
    }

//

}
