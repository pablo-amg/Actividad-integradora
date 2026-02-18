<?php include('header.php'); ?>
<?php if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') { ?>
    <div class="alerta_exito">
        Videijuego eliminado correctamente de la base de datos.
    </div>
<?php } ?>


<section class="contenedor_personajes">
<?php include("conexion.php");
$consulta_db = mysqli_query($conexion_db, "SELECT * FROM videojuegos");
while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {

?>

<!-- Toma las variables de la BD con mysqli_fetch_assoc -->

    <div class="caja_personajes">
        <h2><?php echo $mostrar_datos['nombre'] . " " . $mostrar_datos['precio']; ?> </h2>
        <img src="imagenes/<?php echo $mostrar_datos['imagen'] ?>" alt="<?php echo $mostrar_datos['nombre'] ?>">
        <p> <?php echo $mostrar_datos['descripcion'] ?></p>
        <a href="eliminar.php?id=<?php echo $mostrar_datos['id'] ?>"> Eliminar </a>

    </div>

    <?php } ?>

</section>