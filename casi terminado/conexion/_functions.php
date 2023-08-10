<?php
require_once("conexion.php");

if (isset($_POST['accion'])) {
    $conexion = mysqli_connect("localhost", "root", "", "bd");

    switch ($_POST['accion']) {
        case 'editar_registro':
            editar_registro($conexion);
            break;

        case 'eliminar_registro':
            eliminar_registro($conexion);
            break;
    }

    mysqli_close($conexion);
}

function editar_registro($conexion) {
    extract($_POST);
    $consulta = "UPDATE usuarios SET nombre = '$nombre', usuario = '$usuario', password ='$password', area = '$area', rol = '$rol' WHERE id = '$id'";
    
    if (mysqli_query($conexion, $consulta)) {
        header('Location: ../views/Administrador.php');
    } else {
        // Manejo de error en la consulta de actualización
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}

function eliminar_registro($conexion) {
    $id = $_POST['id'];
    $consulta = "DELETE FROM usuarios WHERE id = $id";

    if (mysqli_query($conexion, $consulta)) {
        header('Location: ../views/Administrador.php');
    } else {
        // Manejo de error en la consulta de eliminación
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
}
?>