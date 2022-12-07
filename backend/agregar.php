<?php
    include "../conexion.php";
    $conexion = conexion();
    $nombre_pais = $_POST ['nombre_pais'];
    $continenete = $_POST ['continente'];
    $bandera = $_POST ['bandera'];
    $sql = "INSERT INTO t_paises (nombre_pais,continenete,bandera) VALUES ( '$nombre_pais','$continenete','$bandera')";
    $respuesta = mysqli_query($conexion,$sql);

    if ($respuesta) {
        header ('location:../index.php');
    }else{
        echo "No se pudo insertar";
    }
?>