<?php
    include "conexionDB.php";
    
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $cantidad = $_POST["cantidad"];
    $tipo = $_POST["tipo"];

    $sql = "INSERT INTO tickets VALUES (NULL, '$nombre', '$apellido', '$correo', '$cantidad', '$tipo')";

    $consulta = mysqli_query($conexion, $sql);
    
    echo "Compra exitosa!";