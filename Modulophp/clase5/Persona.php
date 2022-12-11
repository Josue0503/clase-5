<?php
class Persona
{
    private $nombre;
    private $apellido;
    


    //metodo getter and setter

   
   function  setNombre($nombre){
    $this ->nombre = $nombre;
   }
   function getNombre(){
    return  $this -> nombre;
   }

   
   function  setApellido($apellido){
    $this ->apellido = $apellido;
   }
   function getApellido(){
    return  $this -> apellido;
   }

   
   function  Comer (){
    echo 'Comiendo';
   }
   function Dormir(){
    echo 'Durmiendo';
   }
   function  Beber (){
    echo 'Bebiendo awa';
   }
   


}
?>