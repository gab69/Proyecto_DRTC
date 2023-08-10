<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/es.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <title>Solicitudes</title>
</head>

<body>
    <div class="container is-fluid">
        <div class="col-xs-12">
            <h1>Bienvenido Administrador <?php // Agregar el nombre del administrador ?></h1>
            <br>
            <h1>Lista de solicitudes</h1>
            <br>
            <div>
                <a class="btn btn-success" href="../accion/registrar.php">Registrar usuario</a>
                <a class="btn btn-success" href="../views/Administrador.php">Ver usuarios</a>
                <a class="btn btn-success" href="../views/ver_solicitudes.php">Ver solicitudes</a>
                <a class="btn btn-warning" href="../accion/cerrarSesion.php">Cerrar sesión</a>
            </div>
            <br>
            <br>
            <table class="table table-striped table-dark" id="table_id">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Area</th>
                        <th>Descripción</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conexion = mysqli_connect("localhost", "root", "", "bd");

                    $SQL = "SELECT nombre, area, problema, fecha FROM solicitudes";
                    $dato = mysqli_query($conexion, $SQL);

                    if ($dato->num_rows > 0) {
                        while ($fila = mysqli_fetch_assoc($dato)) {
                    ?>
                            <tr>
                                <td><?php echo $fila['nombre']; ?></td>
                                <td><?php echo $fila['area']; ?></td>
                                <td><?php echo $fila['problema']; ?></td>
                                <td><?php echo $fila['fecha']; ?></td>
                            </tr>
                    <?php
                        }
                    } else {
                    ?>
                        <tr class="text-center">
                            <td colspan="3">No existen registros</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="../js/user.js"></script>
</body>

</html>