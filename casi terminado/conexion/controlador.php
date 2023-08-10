<?php
if(!empty($_POST["btningresar"])){
 
    if(!empty($_POST["usuario"]) and empty($_POST["password"])){
        echo '<div class="alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    }else{
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["password"];
    


        $sql=$conexion->query(" select * from usuarios where usuario='$usuario' and password='$contraseña'");
        if($datos=$sql->fetch_object()){


    $conexion1=mysqli_connect("localhost","root","","bd");
    $consulta1= "select * from usuarios where usuario='$usuario' and password='$contraseña'";
    $resultado1=mysqli_query($conexion1, $consulta1);
    $filas=mysqli_fetch_array($resultado1);


    if($filas['rol'] == 1){ //admin

        header('Location: views/Administrador.php');

    }else if($filas['rol'] == 2){//lector
        header('Location: views/lector.php');
    }



}
        else{
            echo '<div class="alert alert-danger">USUARIO Y/O CONTRASEÑA INCORRECTO</div>';
        }


    }}?>