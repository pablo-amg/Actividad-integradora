<?php include('header.php'); ?>
   <?php if (isset($_GET['mensaje']) and $_GET['mensaje'] == 'eliminado') { ?>
        <div class="alerta_exito">
            El personaje ha sido eliminado correctamente.
        </div>
    <?php } ?>

<section class="contenedor_personajes">
   <?php include("conexion.php");
    $consulta_db = mysqli_query($conexion_db, "SELECT * FROM personajes");
    while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {

    ?>
        <div class="caja_personajes">
            <h2><?php echo $mostrar_datos['nombre'] . " " . $mostrar_datos['apellido']; ?> </h2>
            <img src="imagenes/<?php echo $mostrar_datos['imagen'] ?>" alt="<?php echo $mostrar_datos['nombre'] ?>">
            <p> <?php echo $mostrar_datos['descripcion'] ?></p>
            <a href="eliminar.php?id=<?php echo $mostrar_datos['id'] ?>"> Eliminar </a>

        </div>

    <?php } ?>

</section>