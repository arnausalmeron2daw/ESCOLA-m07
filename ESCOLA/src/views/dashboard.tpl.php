<?php

include_once 'partials/header.tpl.php';
require  'src/conexion.php';

?>

<body>
<nav class="breadcrumb">
        <ol class="breadcrumb">
            <li>Home</li>
            <li>>LoginALUMNE</li>
            <li>>DashboardALUMNE</li>
        </ol>
    </nav>
    <h1><?= $title; ?></h1>
    <hr />

    

    <h3>BIENVENIDO :)</h3>

    <h1>Mi Perfil</h1>

    <form action="?url=tables" method="POST">
        <label for="nombre"><?php echo $_SESSION['nombre'] ?></label>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido">
        <br>
        <label for="email"><?php echo $_SESSION['email'] ?></label>
        <input type="text" name="email" id="email">
        <br>
        <label for="fecha_nacimiento">fecha de nacimiento</label>
        <input type="text" name="fecha_nacimiento" id="fecha_nacimiento">
        <br>
        <label for="direccion">direccion</label>
        <input type="text" name="direccion" id="direccion">
        <br>
        <label for="telefono">telefono</label>
        <input type="text" name="telefono" id="telefono">
        <br>
        <input type="submit" name="actualizar" value="Actualizar Registro">
    </form>


    <a href="?url=logout">LOG OUT</a>

    <?php include_once 'partials/footer.tpl.php' ?>
</body>

</html>