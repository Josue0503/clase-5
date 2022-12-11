<?php 
class producto{
    public $name = "Ariel desinfectante";
    public $cant = 3;
    public $precio = 5;
}

$product = new producto();

echo '<br> Nombre: '. $product->name;
echo '<br> Edad: '. $product->cant;
echo '<br> Dirección: '. $product->precio;
echo '<br> Subtotal: '.$product->cant*$product->precio;

?>