<?php 
    include("header.php"); ?>

<!-- FORMULARIO DE DATOS -->
<section class="contenedor_cargar">
    <h3> Cargar videojuego </h3>
    <!-- Aqui es donde hacemos la conexion con cargar_personaje.php -->
    <form action="cargar_personaje.php" method="post" class="formulario">
        <input type="text" name="nombre" placeholder="Nombre del videojuego" required>
        <input type="text" name="precio" placeholder="Precio del videojuego" required>
        <input type="text" name="imagen" placeholder="imagen">
        <textarea name="descripcion" id="descripcion" placeholder="Descripción del videojuego"></textarea>
        <input type="submit" value="Cargar videojuego">
    </form>

  <!-- Mensaje de éxito -->  
    <?php 
    if (isset($_GET['ok'])) {
        echo "<h4 class='exito'> videojuego cargado con éxito </h4>";
    }
    ?>
</section>

</body>

</html>