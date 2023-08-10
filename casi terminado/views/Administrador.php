
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">

<link rel="stylesheet" href="../css/estilo.css">
<link rel="stylesheet" href="../css/es.css">
    <title>Usuarios</title>
</head>

<div class="container is-fluid">




<div class="col-xs-12">
  		<h1>Bienvenido Administrador <?php ?></h1>
      <br>
		<h1>Lista de usuarios</h1>
    <br>
		<div>
                <a class="btn btn-success" href="../accion/registrar.php">Registrar usuario</a>
                <a class="btn btn-success" href="../views/Administrador.php">Ver usuarios</a>
                <a class="btn btn-success" href="../views/ver_solicitudes.php">Ver solicitudes</a>
                <a class="btn btn-warning" href="../accion/cerrarSesion.php">Cerrar sesión</a>

		</div>
		<br>
    <br>
    </form>
      <table class="table table-striped table-dark " id= "table_id">
 
                         <thead>    
                         <tr>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Password</th>
                        <th>Area</th>
                        <th>Rol</th>
                        <th>Acciones</th>
         
                        </tr>
                        </thead>
                        <tbody>

				<?php

$conexion=mysqli_connect("localhost","root","","bd");               
$SQL="SELECT usuarios.id, usuarios.nombre, usuarios.usuario, usuarios.password, usuarios.area,
 permisos.rol FROM usuarios
LEFT JOIN permisos ON usuarios.rol = permisos.id";
$dato = mysqli_query($conexion, $SQL);

if($dato -> num_rows >0){
    while($fila=mysqli_fetch_array($dato)){
    
?>
<tr>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['usuario']; ?></td>
<td><?php echo $fila['password']; ?></td>
<td><?php echo $fila['area']; ?></td>
<td><?php echo $fila['rol']; ?></td>



<td>


<a class="btn btn-warning" href="../accion/editar.php?id=<?php echo $fila['id']?> ">
EDITAR </a>

  <a class="btn btn-danger"  href="../accion/eliminar.php?id=<?php echo $fila['id']?>"  >
ELIMINAR</a>

</td>
</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="16">No existen registros</td>
    </tr>

    
    <?php
    
}

?>


	</body>
  </table>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="../js/user.js"></script>


</html>