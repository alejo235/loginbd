<?php
    session_start();
    require 'conexion.php';
    $user = $_POST['usuario'];
    $clave = $_POST['clave'];
    $query = "SELECT COUNT(*) as validacion FROM usuario where username ='$user' and  pass='$clave'";
    $bdconect = mysqli_query($conectar,$query);
    $parametros = mysqli_fetch_array($bdconect);
    if($parametros['validacion']>0){
        $_SESSION['username'] = $user;
        header("location: index.php");
    }else{
        echo "<h1>Usuario o contraseña incorrecto</h1>";
        echo "<a href='login.php'>Volver</a>";
    }
?>
