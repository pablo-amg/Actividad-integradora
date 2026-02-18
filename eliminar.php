<?php 

/* Obtiene la ID de la URL */
include("conexion.php");
$id_videojuego = $_GET['id'];

mysqli_query($conexion_db, "DELETE FROM videojuegos WHERE id = '$id_videojuego' ");

header("Location: ver.php?mensaje=eliminado");