<?php 
    include("header.php"); ?>

<!-- FORMULARIO DE DATOS -->
<section class="contenedor_cargar">
    <h3> Cargar personaje </h3>
    <form action="cargar_personaje.php" method="post" class="formulario">
        <input type="text" name="nombre" placeholder="Nombre del personaje" required>
        <input type="text" name="apellido" placeholder="apellido">
        <input type="text" name="imagen" placeholder="imagen">
        <textarea name="descripcion" id="descripcion" placeholder="Descripción del personaje"></textarea>
        <input type="submit" value="Cargar personaje">
    </form>

    
    <?php 
    if (isset($_GET['ok'])) {
        echo "<h4 class='exito'> Personaje cargado con éxito </h4>";
    }
    ?>
</section>

</body>

</html>