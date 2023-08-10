<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Seguimiento de Solicitud</title>

    <link rel="stylesheet" href="../css/es.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body id="page-top">

<div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <br>
                    <br>
                    <h3 class="text-center">Seguimiento de Solicitud</h3>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre *</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required>
                        </div>
                        <br>
                        <div class="mb-3">
                            <input type="submit" value="Buscar" class="btn btn-success" name="buscar_solicitud">
                            <a href="../views/lector.php" class="btn btn-danger">Volver</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['buscar_solicitud'])) {
    $conexion = mysqli_connect("localhost", "root", "", "bd");

    $SQL = "SELECT nombre, area, problema, fecha FROM solicitudes";
    $dato = mysqli_query($conexion, $SQL);

    if ($dato->num_rows > 0) {
?>
    <div class="container mt-5">
        <h3 class="text-center">Resultados de Seguimiento de Solicitud</h3>
        <table class="table table-striped table-dark" id="table_id">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Área</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php
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
                ?>
            </tbody>
        </table>
    </div>
<?php
    } else {
?>
        <div class="container mt-5">
            <p class="text-center">No existen registros</p>
        </div>
<?php
    }
}
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/user.js"></script>

</body>
</html>