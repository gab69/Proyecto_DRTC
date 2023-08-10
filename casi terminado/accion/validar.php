<?php
$conexion = mysqli_connect("localhost", "root", "", "bd");

if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

if (isset($_POST['registrar'])) {
    $nombre = trim($_POST['nombre']);
    $usuario = trim($_POST['usuario']);
    $password = $_POST['password'];
    $area = trim($_POST['area']);
    $rol = trim($_POST['rol']);

    // Validar los campos (puedes agregar más validaciones según tus necesidades)
    if (empty($nombre) || empty($usuario) || empty($password) || empty($area) || empty($rol)) {
        die("Por favor, complete todos los campos obligatorios.");
    }

   
    $consulta = "INSERT INTO usuarios (nombre, usuario, password, area, rol) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_bind_param($stmt, "sssss", $nombre, $usuario, $password, $area, $rol);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
        header('Location: ../views/Administrador.php');
        exit();
    } else {
        die("Error al registrar el usuario: " . mysqli_error($conexion));
    }
}
?>