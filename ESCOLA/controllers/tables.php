<?php

require 'src/conexion.php';

try {

    $conexion = $dbh;


    if (!$conexion) {
        die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }

    if (isset($_POST['actualizar'])) {
        $nombre = $_SESSION['nombre'];
        //$email = $_SESSION['email'];
        $apellidos = $_POST['apellido'];
        //$fech_nac = $_POST['fecha_nacimiento'];
        // $direccion = $_POST['direccion'];
        // $telefono = $_POST['telefono'];

        // $nombre = $_SESSION['nombre'];

        // $apellidos =$_POST['apellidos']);
        // $fech_nac = mysqli_real_escape_string($conexion, $_POST['fecha_nacimiento']);
        // $direccion = mysqli_real_escape_string($conexion, $_POST['direccion']);
        // $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);


        // Vincular los parámetros



        $sql = "UPDATE alumnos SET apellido = :apellido WHERE nombre = :nombre";


        $stmt = $conexion->prepare($sql);

        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $apellidos, PDO::PARAM_STR);
        // $stmt->bindParam(':fecha_nacimiento', $fech_nac, PDO::PARAM_STR);
        //$stmt->bindParam(':direccion', $direccion, PDO::PARAM_STR);
        //$stmt->bindParam(':telefono', $telefono, PDO::PARAM_STR);

        if ($stmt->execute()) {
            header('Location:?url=dashboard');
        } else {
            echo "Error al actualizar el registro: " . implode(" ", $stmt->errorInfo());
        }
    } 
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}
