<?php  
session_start(); //significa que usaremos sesiones

session_unset(); //limpia las sesiones

session_destroy(); //destruye las sesiones

header('location:index.php');
?>