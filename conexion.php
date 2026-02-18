<?php 

## Para poder cambiarla mas facilmente 
$BaseDeDatos = "bd_pablo";

$conexion_db = mysqli_connect("localhost", "root", "", $BaseDeDatos ) or die("Error de conexión a la base de datos") ;
