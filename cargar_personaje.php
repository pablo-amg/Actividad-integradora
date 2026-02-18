<?php
include("conexion.php");

/* Recibir datos del formulario */
/* obtiene los datos gracias a index.php linea 8 "action" */
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$imagen = $_POST['imagen'];
$descripcion = $_POST['descripcion'];   

/* ⚠️ IMPORTANTE: el orden no es el mismo que en MariaBD ✅ REORGANIZADO */
/* ✅ INSERTANDO EN BD */

mysqli_query($conexion_db, "INSERT INTO videojuegos VALUES (DEFAULT, '$nombre', '$imagen', '$precio', '$descripcion') ");

mysqli_close($conexion_db);

/* Redirige a index.php con el parámetro ok */
header("Location: index.php?ok");
