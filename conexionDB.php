<?php
    //Datos de conexion
    //$servidor = "localhost";
    //$usuario = "id20984727_marcelo";
    //$clcave = "Mj!41340912";

    $servidor = "localhost";
    $usuario = "root";
    $clcave = "";

    //Conexion
    $conexion = mysqli_connect($servidor, $usuario, $clcave);

    //$DB = "id20984727_tickets";
    $DB = "codo_a_codo";

    mysqli_select_db($conexion, $DB);