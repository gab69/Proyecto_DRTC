<?php
$conexion = mysqli_connect("localhost", "root", "", "bd");

date_default_timezone_set('America/Lima'); // Corregir la zona horaria
$fecha = date("Y-m-d H:i:s"); // Agregar hora, minuto y segundo

// Verificar la conexión
if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

if (isset($_POST['solicitar'])) {
    $nombre = trim($_POST['nombre']);
    $area = trim($_POST['area']);
    $problema = trim($_POST['problema']);

    // Validar los campos (puedes agregar más validaciones según tus necesidades)
    if (empty($nombre) || empty($area) || empty($problema)) {
        die("Por favor, complete todos los campos obligatorios.");
    }

    // Preparar la consulta con una sentencia preparada para evitar SQL injection
    $consulta = "INSERT INTO solicitudes (nombre, area, problema, fecha) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexion, $consulta);

    // Vincular los parámetros y sus tipos
    mysqli_stmt_bind_param($stmt, "ssss", $nombre, $area, $problema, $fecha);

    // Ejecutar la consulta
    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
        header('Location: ../views/lector.php');
        exit();
    } else {
        die("Error al registrar la solicitud: " . mysqli_error($conexion));
    }
}
?>
