<?php
$id = $_GET['id'];
$conexion = mysqli_connect("localhost", "root", "", "bd");
$consulta = "SELECT * FROM usuarios WHERE id = $id";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>

    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/es.css">
</head>

<body id="page-top">
    <form action="../conexion/_functions.php" method="POST">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <br>
                            <br>
                            <h3 class="text-center">Editar usuario</h3>
                            <div class="form-group">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" value="<?= $usuario['nombre'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="usuario">Usuario:</label><br>
                                <input type="usuario" name="usuario" id="usuario" class="form-control" placeholder="" value="<?= $usuario['usuario'] ?>"required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label><br>
                                <input type="password" name="password" id="password" class="form-control" value="<?= $usuario['password'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="area" class="form-label">Área</label>
                                <input type="area" id="area" name="area" class="form-control" value="<?= $usuario['area'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="rol" class="form-label">Rol de usuario </label>
                                <input type="number" id="rol" name="rol" class="form-control" placeholder="Escribe el rol, 1 admin, 2 lector.." value="<?= $usuario['rol'] ?>" required>
                                <input type="hidden" name="accion" value="editar_registro">
                                <input type="hidden" name="id" value="<?= $id ?>">
                            </div>
                            <br>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a href="../views/Administrador.php" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
