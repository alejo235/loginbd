<?php
    session_start();
    $sesion = $_SESSION['username'];
    echo "<h1> Bienvenido $sesion </h1>";
?>