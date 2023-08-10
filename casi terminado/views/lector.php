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
            <h1>Bienvenido Usuario <?php // Agrega el nombre del administrador ?></h1>
            <br>
            <h1>Área de Soporte Técnico</h1>
            <br>
            <div>
              
                <a class="btn btn-success" href="../views/solicitud.php">Solicitud</a>
                <a class="btn btn-success" href="../views/seguimiento.php">Seguimiento</a>
                <a class="btn btn-warning" href="../accion/cerrarSesion.php">Cerrar sesión</a>
            </div>
        </div>
    </div>

    <!-- Agrega la imagen y el texto en un contenedor -->
    <div class="image-container">
        <img src="../img/atencion.png" alt="Imagen de Soporte Técnico" class="bottom-image">
        <p>¡Bienvenido a nuestra página de soporte técnico! Estamos aquí para ayudarte a resolver tus problemas informáticos de manera eficiente y rápida.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="../js/user.js"></script>
</body>

</html>