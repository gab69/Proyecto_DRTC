<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Confirmación de eliminación de usuario">
    <meta name="author" content="Tu Nombre">
    <title>Confirmar Eliminación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="alert alert-danger text-center">
                    <p>¿Desea confirmar la eliminación del registro?</p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <form action="../conexion/_functions.php" method="POST">
                            <input type="hidden" name="accion" value="eliminar_registro">
                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                            <div class="d-grid gap-2">
                                <input type="submit" value="Eliminar" class="btn btn-danger">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <a href="../views/Administrador.php" class="btn btn-success">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
